<?php
namespace themes\admin360\assetbundles;

use yii\web\AssetBundle;

class FontAwesomeRtlAsset extends AssetBundle
{
    public $sourcePath = '@themes/admin360/assets';
    public $css = [
        'css/font-awesome-rtl.css',
    ];
    public $depends = [
        'themes\admin360\assetbundles\FontAwesomeAsset',
    ];
}
