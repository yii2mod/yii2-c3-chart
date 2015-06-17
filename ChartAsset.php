<?php

namespace yii2mod\c3\chart;

use yii\web\AssetBundle;

/**
 * Class ChartAsset
 * @package yii2mod\c3\chart
 */
class ChartAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/yii2mod/yii2-c3-chart/assets';

    /**
     * @var array
     */
    public $js = [
        'c3.js',
    ];

    /**
     * @var array
     */
    public $css = [
        'c3.css'
    ];

    /**
     * Depends
     * @var array
     */
    public $depends = [
        'yii2mod\pie\PieAsset'
    ];
}
