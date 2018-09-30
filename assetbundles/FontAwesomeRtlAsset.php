<?php
namespace theme\assetbundles;

use yii\web\AssetBundle;

class FontAwesomeRtlAsset extends AssetBundle
{
    public $sourcePath = '@themes/admin360/assets';
    public $css = [
        'css/font-awesome-rtl.css',
    ];
    public $depends = [
        'theme\assetbundles\FontAwesomeAsset',
    ];
}
