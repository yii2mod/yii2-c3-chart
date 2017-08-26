<?php

namespace yii2mod\c3\chart;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class Chart
 *
 * @package yii2mod\c3\chart
 */
class Chart extends Widget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerAssets();

        return Html::tag('div', '', ['id' => $this->options['id']]);
    }

    /**
     * Register assets
     */
    protected function registerAssets()
    {
        $id = $this->options['id'];
        $view = $this->getView();
        ChartAsset::register($view);
        $view->registerJs("var {$id} = c3.generate({$this->getClientOptions()});", $view::POS_END);
    }

    /**
     * Get client options in the json format
     *
     * @return string
     */
    protected function getClientOptions()
    {
        $this->clientOptions['bindto'] = '#' . $this->options['id'];

        return Json::encode($this->clientOptions);
    }
}
