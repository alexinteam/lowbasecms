<?php

namespace app\components\web;

/**
 * Class View
 * @package app\components\web
 */
class View extends \yii\web\View{

    public $siteTheme;

    /**
     * @param $path
     * @return string
     */
    public function getThemeUrl($path){
        if($this->siteTheme){
            $key = 'app\themes\sites\\' . $this->siteTheme . '\\ThemeAsset';
            $assets = $this->getAssetsInfo();

            if(isset($assets[$key]['url'])){
                $url = $assets[$key]['url'];
                $path = $url . '/' . $path;
                return $path;
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
}