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

use Yii;

/**
 * This is the model class for table "{{%eav_attribute_option}}".
 *
 * @property integer $id
 * @property integer $attribute_id
 * @property string $value
 *
 * @property EavAttribute[] $eavAttributes
 * @property EavAttribute $attribute
 * @property EavValue[] $eavValues
 */
class EavAttributeOption extends \gearsoftware\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%eav_attribute_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attribute_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('core', 'ID'),
            'attribute_id' => Yii::t('core/eav', 'Attribute'),
            'value' => Yii::t('core', 'Value'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getEavAttributes()
//    {
//        return $this->hasMany(EavAttribute::className(), ['default_option_id' => 'id'])
//          ->orderBy(['order' => SORT_DESC]);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttribute($name = '')
    {
        return $this->hasOne(EavAttribute::className(), ['id' => 'attribute_id']);
    }

}