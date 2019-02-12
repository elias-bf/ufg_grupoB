<?php

namespace app\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    
    public $baseUrl = '@web';
    
    public $css = 
    [
        'template/dist/css/style.css',
        'template/dist/et-line-font/et-line-font.css',
        'template/dist/font-awesome/css/font-awesome.min.css',
        'template/dist/weather/weather-icons.min.css',
        'template/dist/weather/weather-icons-wind.min.css'
    ];

    public $js =
    [
        'template/dist/js/ovio.js'
    ];

    public $depends = 
    [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
