C3 Chart generator
===============================================
Yii2 wrapper for D3-based reusable chart library

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-c3-chart/v/stable)](https://packagist.org/packages/yii2mod/yii2-c3-chart) [![Total Downloads](https://poser.pugx.org/yii2mod/yii2-c3-chart/downloads)](https://packagist.org/packages/yii2mod/yii2-c3-chart) [![License](https://poser.pugx.org/yii2mod/yii2-c3-chart/license)](https://packagist.org/packages/yii2mod/yii2-c3-chart)

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-c3-chart "*"
```

or add

```
"yii2mod/yii2-c3-chart": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php echo \yii2mod\c3\chart\Chart::widget([
    'options' => [
            'id' => 'popularity_chart'
    ],
    'clientOptions' => [
       'data' => [
            'x' => 'x',
            'columns' => [
                ['x', 'week 1', 'week 2', 'week 3', 'week 4'],
                ['Popularity', 10, 20, 30, 50]
            ],
            'colors' => [
                'Popularity' => '#4EB269',
            ],
        ],
        'axis' => [
            'x' => [
                'label' => 'Month',
                'type' => 'category'
            ],
            'y' => [
                'label' => [
                    'text' => 'Popularity',
                    'position' => 'outer-top'
                ],
                'min' => 0,
                'max' => 100,
                'padding' => ['top' => 10, 'bottom' => 0]
            ]
        ]
    ]
]); ?>
```

Chart Examples 
----------------
You can find them on the [examples page](http://c3js.org/examples.html)


Chart Options 
----------------
You can find them on the [options page](http://c3js.org/reference.html)
