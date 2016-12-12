<?php

namespace app\models\traits\details;

use Yii;

/**
 * Implements the relation parent - child as a single space of a class.
 *
 * Class ParentModel
 * @package app\common\traits
 */
trait ParentModel
{
    /**
     * @var array - ids complementary models
     */
    static private $_detailsIds = [];

    /**
     * @var null - complementary model
     */
    private $_detailsModel = null;

    /* THIS */

    /**
     * If property not exist in self return this property from detail model
     */
    public function __get($name)
    {
        try {
            $result = parent::__get($name);
        } catch (\Exception $e) {
            $result = null;
        }
        if ($result !== null) {
            return $result;
        }
        $this->_initDetailsModel();
        return $this->_detailsModel->$name;
    }

    /**
     * If property not exist in self set this property for detail model
     */
    public function __set($name, $value)
    {
        try {
            parent::__set($name, $value);
        } catch (\Exception $e) {
            $this->_initDetailsModel();
            $this->_detailsModel->$name = $value;
        }
    }

    /**
     * If property not exist in self unset this property for detail model
     */
    public function __unset($name)
    {
        try {
            parent::__unset($name);
        } catch (\Exception $e) {
            $this->_initDetailsModel();
            unset($this->_detailsModel->$name);
        }
    }

    /**
     * Simple getter for self
     */
    public function get($name, $default = null)
    {
        return $this->$name !== null ? $this->$name : $default;
    }

    /**
     * Simple setter for self
     */
    public function set($name, $value)
    {
        return $this->$name = $value;
    }

    /**
     * Override behavior which set of unsafe attribute
     */
    public function onUnsafeAttribute($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * Delete all relation records from db
     */
    public function deleteDetail($option)
    {
        $detailClass = $this->detailClass;
        return $detailClass::deleteAll(self::getIdField() . ' = ' . $this->getId() . ' AND `option` = :option', [':option' => $option]);
    }

    /* DETAILS IMPLEMENTATION */

    /**
     * Initializing details model
     */
    private function _initDetailsModel()
    {
        if ($this->_detailsModel === null) {
            $this->_loadDetailsIds();
            $detailClass = $this->detailClass;
            $this->_detailsModel = $detailClass::initDetails($this, self::getIdField(), $this->getId());
        }
    }

    /**
     * Get details data from db
     */
    private function _loadDetailsIds()
    {
        $className = self::className();
        if (isset(self::$_detailsIds[$className]) && count(self::$_detailsIds[$className])) {
            $detailClass = $this->detailClass;
            $detailClassName = $detailClass::className();
            $idField = self::getIdField();
            $models = $detailClassName::find()
                ->where([$idField => self::$_detailsIds[$className]])
                ->asArray()->all();
            foreach ($models as $model) {
                $detailClassName::$_detailsData[$detailClassName][$model[$idField]][$model['option']] = (string)$model['value'];
            }
            unset(self::$_detailsIds[$className]);
        }
    }

    /**
     * Make this record a detailed.
     */
    public function afterFind()
    {
        self::$_detailsIds[self::className()][] = $this->getId();
    }

    public function save($runValidation = true, $attributeNames = null)
    {
        return $this->saveInternal($runValidation, $attributeNames);
    }

    /**
     * Save with detail model
     */
    public function saveInternal($runValidation = true, $attributeNames = null)
    {
        $recordId = $this->getId();
        $result = parent::save($runValidation, $attributeNames);
        if ($result) {
            if (!$recordId) {
                $this->_initDetailsModel();
                $this->_detailsModel->setLoadedId($this->getId());
                $this->saveDetails($attributeNames);
            } else {
                $this->saveDetails($attributeNames);
            }
        }
        return $result;
    }

    /**
     * Save detail attributes
     */
    public function saveDetails($attributeNames = null)
    {
        if ($this->_detailsModel !== null) {
            if ($attributeNames) {
                $attributeNames = array_diff($attributeNames, $this->attributes());
            }
            $this->_detailsModel->save(true, $attributeNames);
        }
    }

}