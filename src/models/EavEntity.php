<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\eav\models;

/**
 * This is the model class for table "{{%eav_entity}}".
 *
 * @property integer $id
 * @property integer $model_id
 * @property integer $category_id
 *
 * @property EavAttribute[] $eavAttributes
 */
class EavEntity extends \gearsoftware\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%eav_entity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id', 'category_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('core', 'ID'),
            'model_id' => Yii::t('core/eav', 'Model'),
            'category_id' => Yii::t('core', 'Category'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntityModel()
    {
        return $this->hasOne(EavEntityModel::className(), ['id' => 'model_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEavAttributes()
    {

        return $this->hasMany(EavAttribute::className(), ['id' => 'attribute_id'])
            ->viaTable('{{%eav_entity_attribute}}', ['entity_id' => 'id']);
        //->orderBy(['eav_entity_attribute.order' => SORT_DESC]);
    }
}