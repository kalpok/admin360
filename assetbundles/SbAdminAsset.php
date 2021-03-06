<?php
namespace theme\assetbundles;

use yii\web\AssetBundle;

class SbAdminAsset extends AssetBundle
{
    public $sourcePath = '@themes/admin360/bower_components/startbootstrap-sb-admin/dist';
    public $css = [
        'css/sb-admin-2.css',
    ];
    public $js = [
        'js/sb-admin-2.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'theme\assetbundles\FontAwesomeAsset',
        'theme\assetbundles\MetisMenuAsset'
    ];
}
