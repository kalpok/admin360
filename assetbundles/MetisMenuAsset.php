<?php
namespace theme\assetbundles;

use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle
{
    public $sourcePath = '@themes/admin360/bower_components/metisMenu/dist';
    public $css = [
        'metisMenu.min.css',
    ];
    public $js = [
    	'metisMenu.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
