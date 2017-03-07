<?php

namespace yii2mod\c3\chart;

use yii\web\AssetBundle;

/**
 * Class ChartAsset
 *
 * @package yii2mod\c3\chart
 */
class ChartAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle
     */
    public $sourcePath = '@bower';

    /**
     * @var array list of JavaScript files that this bundle contains
     */
    public $js = [
        'd3/d3.min.js',
        'c3/c3.min.js',
    ];

    /**
     * @var array list of CSS files that this bundle contains
     */
    public $css = [
        'c3/c3.min.css',
    ];
}
