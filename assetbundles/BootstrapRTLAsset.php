<?php
namespace theme\assetbundles;

use yii\web\AssetBundle;

class BootstrapRTLAsset extends AssetBundle
{
    public $sourcePath = '@themes/admin360/bower_components/bootstrap-rtl/dist';
    public $css = [
        'css/bootstrap-rtl.min.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
