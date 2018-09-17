<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use yii\widgets\ListView;

/* @var $this yii\web\View */

if ($dataProvider) {
    echo ListView::widget([
        'showOnEmpty' => true,
        'dataProvider' => $dataProvider,
        'layout' => "{items}",
        'options' => [
            'tag' => 'ul',
            'class' => 'sortable',
        ],
        'itemOptions' => [
            'tag' => 'li',
            'class' => 'sortable-item',
        ],
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('attribute', ['model' => $model]);
        },
    ]);
}