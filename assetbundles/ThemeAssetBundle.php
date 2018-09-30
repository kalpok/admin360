<?php
namespace theme\assetbundles;

use yii\web\AssetBundle;

class ThemeAssetBundle extends AssetBundle
{
    public $sourcePath = '@themes/admin360/assets';
    public $css = [
        'css/custom.css',
        'css/sliding-form.css'
    ];
    public $js = [
        'js/app.js',
        'js/sliding-form.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'theme\assetbundles\Admin360Asset'
    ];
}
