<?php
/**
 * @copyright Copyright (c) 2014 Newerton Vargas de Araújo
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace latik\fancybox;

use yii\web\AssetBundle;

class FancyBoxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fancyapps/fancyBox/source/';

    public $js = [];
    
    public $css = [
        'jquery.fancybox.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    public function registerAssetFiles($view) {
        $this->js[] = 'jquery.fancybox' . (!YII_DEBUG ? '.pack' : '') . '.js';
        parent::registerAssetFiles($view);
    }
} 