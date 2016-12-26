<?php

namespace app\components\web;

use app\models\entities\MainSiteConfig;

/**
 * Class View
 * @package app\components\web
 */
class View extends \yii\web\View{

    public $siteTheme;

    public $themeAssets = [
        'restoweb' => '',
        'restoweb_dark' => 'app\assets\AppDarkAsset',
    ];

    public $config;

    /**
     * @param $path
     * @return string
     */


    public function init()
    {
        $this->config = MainSiteConfig::find()->all();
        parent::init();
    }

    public function getThemeUrl($path){
        if($this->siteTheme){
            $key = $this->getThemeAssetName();
            $bundle = $key::register($this);

            if(isset($bundle->baseUrl)){
                return $bundle->baseUrl . '/' . $path;
            }
        }

        return '';
    }

    /**
     * @return array
     */
    public function getAssetsInfo(){
        $assetsManager = $this->getAssetManager();
        $bundles = $assetsManager->bundles;
        $paths = [];

        foreach ($bundles as $assetScope => $asset) {
            $assetScope = trim($assetScope, '\\');
            if (is_object($asset)) {
                if (property_exists($assetScope, 'baseUrl') && $asset->baseUrl) {
                    $paths[$assetScope] = [
                        'url' => $asset->baseUrl,
                        'path' => $asset->basePath,
                    ];
                }
            }
        }

        return $paths;
    }

    /**
     * @return mixed|string
     */
    private function getThemeAssetName(){
        if(isset($this->themeAssets[$this->siteTheme])){
            $key = $this->themeAssets[$this->siteTheme];
        }
        else{
            $key = 'app\themes\sites\\' . $this->siteTheme . '\\ThemeAsset';
        }

        return $key;
    }

}