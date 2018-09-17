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
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%eav_attribute_type}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $store_type
 *
 * @property EavAttribute[] $eavAttributes
 */
class EavAttributeType extends \gearsoftware\db\ActiveRecord
{
    const STORE_TYPE_RAW = 'raw';
    const STORE_TYPE_OPTION = 'option';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%eav_attribute_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_type'], 'string'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('core', 'ID'),
            'name' => Yii::t('core', 'Name'),
            'store_type' => Yii::t('core/eav', 'Store Type'),
        ];
    }

    public static function getAttributeTypes()
    {
        $result = static::find()->all();
        return ArrayHelper::map($result, 'id', 'name');
    }

    public static function getStoreTypes()
    {
        return [
            self::STORE_TYPE_RAW => Yii::t('core/eav', 'Raw'),
            self::STORE_TYPE_OPTION => Yii::t('core/eav', 'Option'),
        ];
    }
}