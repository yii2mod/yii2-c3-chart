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
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/c3';

    /**
     * @var array list of JavaScript files that this bundle contains.
     */
    public $js = [
        'c3.min.js',
    ];

    /**
     * @var array list of CSS files that this bundle contains.
     */
    public $css = [
        'c3.min.css'
    ];

    /**
     * @var array list of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii2mod\pie\PieAsset'
    ];
}