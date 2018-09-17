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
 * This is the model class for table "{{%eav_entity_model}}".
 *
 * @property integer $id
 * @property string $entity_name
 * @property string $entity_model
 *
 * @property EavAttribute[] $eavAttributes
 */
class EavEntityModel extends \gearsoftware\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%eav_entity_model}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['entity_model', 'entity_name'], 'string', 'max' => 127],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('core', 'ID'),
            'entity_name' => Yii::t('core', 'Name'),
            'entity_model' => Yii::t('core/eav', 'Model'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEavAttributes()
    {
        return $this->hasMany(EavAttribute::className(), ['id' => 'entity_id'])
            ->viaTable('{{%eav_entity_attribute}}', ['attribute_id' => 'id'])
            ->orderBy(['order' => SORT_DESC]);
    }
}