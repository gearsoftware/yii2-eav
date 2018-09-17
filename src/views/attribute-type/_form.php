<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\eav\models\EavAttributeType;
use gearsoftware\helpers\Html;
use gearsoftware\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model gearsoftware\eav\models\EavAttributeType */
/* @var $form gearsoftware\widgets\ActiveForm */
?>

<div class="eav-attribute-type-form">

    <?php
    $form = ActiveForm::begin([
        'id' => 'eav-attribute-type-form',
        'validateOnBlur' => false,
    ])
    ?>

    <div class="row">
        <div class="col-md-9">

            <div class="panel panel-default">
                <div class="panel-body">

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                </div>

            </div>
        </div>

        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="record-info">
                        <?php if (!$model->isNewRecord): ?>
                            <div class="form-group clearfix">
                                <label class="control-label"
                                       style="float: left; padding-right: 5px;"><?= $model->attributeLabels()['id'] ?>
                                    : </label>
                                <span><?= $model->id ?></span>
                            </div>
                        <?php endif; ?>

                        <?= $form->field($model, 'store_type')->dropDownList(EavAttributeType::getStoreTypes(), ['prompt' => '']) ?>

                        <div class="form-group">
                            <?php if ($model->isNewRecord): ?>
                                <?= Html::submitButton(Yii::t('core', 'Create'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('core', 'Cancel'), ['/eav/attribute-type/index'], ['class' => 'btn btn-default']) ?>
                            <?php else: ?>
                                <?= Html::submitButton(Yii::t('core', 'Save'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('core', 'Delete'),
                                    ['/eav/attribute-type/delete', 'id' => $model->id], [
                                        'class' => 'btn btn-default',
                                        'data' => [
                                            'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
