<?php

namespace theme\widgets\jalalidatepicker;

use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@themes/admin360/widgets/jalalidatepicker/assets';
    public $js = [
        'js/bootstrap-datepicker.min.js',
        'js/bootstrap-datepicker.fa.min.js'
    ];
    public $css = [
         'css/bootstrap-datepicker.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'theme\assetbundles\BootstrapRTLAsset',
    ];
}
