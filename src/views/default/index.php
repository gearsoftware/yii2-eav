<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\eav\assets\EavAsset;
use gearsoftware\helpers\Html;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */

$this->title = Yii::t('core/eav', 'Custom Fields');
$this->params['breadcrumbs'][] = Yii::t('core/eav', 'EAV');

EavAsset::register($this);
?>
<div class="eav-index">

    <div class="row">
        <div class="col-sm-12">
            <h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3>

            <?= Alert::widget([
                'options' => ['class' => 'alert-primary eav-link-alert'],
                'body' => '<span class="glyphicon glyphicon-refresh glyphicon-spin"></span>',
            ]) ?>

            <?= Alert::widget([
                'options' => ['class' => 'alert-danger eav-link-alert'],
                'body' => Yii::t('core/eav', 'An error occurred during saving EAV attributes!'),
            ]) ?>

            <?= Alert::widget([
                'options' => ['class' => 'alert-info eav-link-alert'],
                'body' => Yii::t('core', 'The changes have been saved.'),
            ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left" style="margin-right: 10px;">
                        <label class="control-label" for="entityModel"><?= Yii::t('core/eav', 'Model') ?>: </label>
                        <?= Html::dropDownList('entityModel', null, $entityModels, ['id' => 'entityModel', 'class' => 'form-control']) ?>
                    </div>
                    <div class="pull-left" style="display: none;">
                        <label class="control-label pull-left" for="entityCategory">
                            <?= Yii::t('core', 'Category') ?>:
                        </label>
                        <div class="eav-categories-wrapper">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body eav-attributes eav-available">
                    <h4><span class="label label-primary"><?= Yii::t('core/eav', 'Available Attributes') ?></span></h4>
                    <div class="content">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-body eav-attributes eav-selected">
                    <h4><span class="label label-primary"><?= Yii::t('core/eav', 'Selected Attributes') ?></span></h4>
                    <div class="content">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


