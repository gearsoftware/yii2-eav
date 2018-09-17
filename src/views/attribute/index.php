<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\eav\models\EavAttribute;
use gearsoftware\eav\models\EavAttributeType;
use gearsoftware\grid\GridPageSize;
use gearsoftware\grid\GridView;
use gearsoftware\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel gearsoftware\eav\models\search\EavAttributeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('core/eav', 'Attributes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('core/eav', 'EAV'), 'url' => ['/eav/default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eav-attribute-index">

    <div class="row">
        <div class="col-sm-12">
            <h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3>
            <?= Html::a(Yii::t('core', 'Add New'), ['/eav/attribute/create'], ['class' => 'btn btn-sm btn-primary']) ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-6">
                    <?php
                    /* Uncomment this to activate GridQuickLinks */
                    /* echo GridQuickLinks::widget([
                        'model' => EavAttribute::className(),
                        'searchModel' => $searchModel,
                    ])*/
                    ?>
                </div>

                <div class="col-sm-6 text-right">
                    <?= GridPageSize::widget(['pjaxId' => 'eav-attribute-grid-pjax']) ?>
                </div>
            </div>

            <?php
            Pjax::begin([
                'id' => 'eav-attribute-grid-pjax',
            ])
            ?>

            <?=
            GridView::widget([
                'id' => 'eav-attribute-grid',
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'bulkActionOptions' => [
                    'gridId' => 'eav-attribute-grid',
                    'actions' => [Url::to(['bulk-delete']) => Yii::t('core', 'Delete')] //Configure here you bulk actions
                ],
                'columns' => [
                    ['attribute' => 'id', 'options' => ['style' => 'width:20px']],
                    [
                        'class' => 'gearsoftware\grid\columns\TitleActionColumn',
                        'attribute' => 'label',
                        'controller' => '/eav/attribute',
                        'buttonsTemplate' => '{update} {delete}',
                        'title' => function (EavAttribute $model) {
                            return Html::a($model->label, ['update', 'id' => $model->id], ['data-pjax' => 0]);
                        },
                    ],
                    'name',
                    [
                        'attribute' => 'type_id',
                        'value' => function (EavAttribute $model) {
                            return $model->eavType->name;
                        },
                        'filter' => ArrayHelper::merge(['' => Yii::t('core', 'Not Selected')], EavAttributeType::getAttributeTypes()),
                        'options' => []
                    ],
                    //'default_value',
                    'description',
                    [
                        'class' => 'gearsoftware\grid\columns\StatusColumn',
                        'attribute' => 'required',
                        'options' => ['style' => 'width:60px']
                    ],
	                [
		                'class' => 'gearsoftware\grid\columns\CheckboxColumn',
	                ],

                ],
            ]);
            ?>

            <?php Pjax::end() ?>
        </div>
    </div>
</div>


