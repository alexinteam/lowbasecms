<?php

namespace app\models\traits\details;

use Yii;

use app\models\entity as Entity;
use yii\helpers\Json;

/**
 * Implements the relation parent - child as a single space of a class.
 *
 * Class ChildModel
 * @package app\common\traits
 */
trait ChildModel
{
    /**
     * @var array - store for the details data.
     */
    static public $_detailsData = [];

    /**
     * @var - variable for an instance the parent model.
     */
    public $parentModel;

    private $_parentIdName;
    private $_parentIdValue;

    private $_oldAttributes = null;
    private $_attributes = [];

    /**
     * Initializing information about parent model and create it.
     * @param \yii\base\Model $parent
     * @param string $parent_id_name
     * @param integer $parent_id_value
     * @return self
     */
    public static function initDetails($parent, $parent_id_name, $parent_id_value)
    {
        $obj = new self;
        $obj->parentModel = $parent;
        $obj->_parentIdName = $parent_id_name;
        $obj->setLoadedId($parent_id_value);
        return $obj;
    }

    /**
     * Set this private property _parentIdValue
     */
    public function setLoadedId($id)
    {
        $this->_parentIdValue = $id;
    }

    /**
     * If $name exist in changed attributes - return it,
     * else - return default data from parent or current model.
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->_attributes)) {
            return $this->_attributes[$name];
        }
        return isset(self::$_detailsData[self::className()][$this->_parentIdValue][$name]) ?
            self::$_detailsData[self::className()][$this->_parentIdValue][$name] :
            null;
    }

    /**
     * When an assignment to work with private array _attributes
     * as property name is key array, property value is key value.
     */
    public function __set($name, $value)
    {
        $this->_attributes[$name] = $value;
    }

    /**
     * When an removal to work with private array _attributes
     * as property name is array key.
     */
    public function __unset($name)
    {
        if (array_key_exists($name, $this->_attributes)) {
            unset($this->_attributes[$name]);
        }
    }

    /**
     * This is handler for processing unsafe attributes.
     */
    public function onUnsafeAttribute($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * Get columns name for current instance model.
     */
    public function attributes()
    {
        if (isset(self::$_detailsData[self::className()][$this->_parentIdValue])) {
            return array_keys(self::$_detailsData[self::className()][$this->_parentIdValue]);
        }
        return [];
    }

    /**
     * Get columns name only for save attributes.
     */
    public function safeAttributes()
    {
        return $this->attributes();
    }

    /**
     * Save the changed attributes if any
     */
    public function save($runValidation = true, $attributeNames = null)
    {
        if (count($this->_attributes)) {
            if (method_exists($this->parentModel, 'beforeSaveDetails')) {
                $this->parentModel->beforeSaveDetails($this->_attributes);
            }
            $insertRows = [];
            foreach ($this->_attributes as $name => $value) {
                if ($attributeNames !== null && !in_array($name, $attributeNames)) {
                    continue;
                }
                if (is_array($value)) {
                    $value = Json::encode($value);
                }
                if (isset(self::$_detailsData[self::className()][$this->_parentIdValue][$name])) {
                    if ($value !== self::$_detailsData[self::className()][$this->_parentIdValue][$name]) {
                        self::$_detailsData[self::className()][$this->_parentIdValue][$name] = $value;
                        self::updateAll(
                            ['value' => $value],
                            $this->_parentIdName . " = " . $this->_parentIdValue . " AND `option` = :option", [':option' => $name]
                        );
                    }
                } else {
                    self::$_detailsData[self::className()][$this->_parentIdValue][$name] = $value;
                    $insertRows[] = [$this->_parentIdValue, $name, $value];
                }
            }
            if (count($insertRows)) {
                $this->getDb()->createCommand()->batchInsert(static::tableName(), [$this->_parentIdName, 'option', 'value'], $insertRows)->execute();
            }
            if (method_exists($this->parentModel, 'afterSaveDetails')) {
                $this->parentModel->afterSaveDetails(array_keys($this->_attributes));
            }
            $this->_attributes = [];
        }
        return true;
    }
}