<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

class m160325_140543_init_eav extends yii\db\Migration
{

    const ENTITY_TABLE = '{{%eav_entity}}';
    const ENTITY_MODEL_TABLE = '{{%eav_entity_model}}';
    const ENTITY_ATTRIBUTE_TABLE = '{{%eav_entity_attribute}}';
    const ATTRIBUTE_TYPE_TABLE = '{{%eav_attribute_type}}';
    const ATTRIBUTE_OPTION_TABLE = '{{%eav_attribute_option}}';
    const ATTRIBUTE_TABLE = '{{%eav_attribute}}';
    const VALUE_TABLE = '{{%eav_value}}';

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable(self::ENTITY_MODEL_TABLE, [
            'id' => $this->primaryKey(),
            'entity_name' => $this->string(100)->notNull(),
            'entity_model' => $this->string(100)->notNull(),
        ], $tableOptions);

        $this->createIndex('eav_entity_model_unique_model', self::ENTITY_MODEL_TABLE, ['entity_model'], true);

        $this->createTable(self::ATTRIBUTE_TYPE_TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'store_type' => $this->string('32')->notNull()->defaultValue('raw')
        ], $tableOptions);

        $this->insert(self::ATTRIBUTE_TYPE_TABLE, ['name' => 'text', 'store_type' => 'raw']);
        $this->insert(self::ATTRIBUTE_TYPE_TABLE, ['name' => 'select', 'store_type' => 'option']);

        $this->createTable(self::ATTRIBUTE_TABLE, [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'label' => $this->string(),
            'default_value' => $this->string(),
            'icon' => $this->string(64),
            'description' => $this->string(),
            'required' => $this->integer(1),
        ], $tableOptions);

        $this->createIndex('eav_attribute_type_id', self::ATTRIBUTE_TABLE, ['type_id']);
        $this->createIndex('eav_attribute_name', self::ATTRIBUTE_TABLE, ['name']);
        $this->addForeignKey('fk_eav_attribute_type', self::ATTRIBUTE_TABLE, 'type_id', self::ATTRIBUTE_TYPE_TABLE, 'id', 'CASCADE', 'CASCADE');

        $this->createTable(self::ATTRIBUTE_OPTION_TABLE, [
            'id' => $this->primaryKey(),
            'attribute_id' => $this->integer(),
            'value' => $this->string(),
        ], $tableOptions);

        $this->createIndex('eav_attribute_option_attribute_id', self::ATTRIBUTE_OPTION_TABLE, ['attribute_id']);
        $this->addForeignKey('fk_eav_option_attribute', self::ATTRIBUTE_OPTION_TABLE, 'attribute_id', self::ATTRIBUTE_TABLE, 'id', 'CASCADE', 'CASCADE');

        $this->createTable(self::ENTITY_TABLE, [
            'id' => $this->primaryKey(),
            'model_id' => $this->integer(),
            'category_id' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('eav_entity_model_id', self::ENTITY_TABLE, ['model_id']);
        $this->createIndex('eav_entity_category_id', self::ENTITY_TABLE, ['category_id']);
        $this->addForeignKey('fk_eav_entity_model', self::ENTITY_TABLE, 'model_id', self::ENTITY_MODEL_TABLE, 'id', 'CASCADE', 'CASCADE');

        $this->createTable(self::ENTITY_ATTRIBUTE_TABLE, [
            'id' => $this->primaryKey(),
            'entity_id' => $this->integer(),
            'attribute_id' => $this->integer(),
            'order' => $this->integer()->defaultValue(0),
        ], $tableOptions);

        $this->createIndex('eav_entity_attribute_entity_id', self::ENTITY_ATTRIBUTE_TABLE, ['entity_id']);
        $this->createIndex('eav_entity_attribute_attribute_id', self::ENTITY_ATTRIBUTE_TABLE, ['attribute_id']);
        $this->addForeignKey('fk_eav_entity_attribute_entity', self::ENTITY_ATTRIBUTE_TABLE, 'entity_id', self::ENTITY_TABLE, 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_eav_entity_attribute_attribute', self::ENTITY_ATTRIBUTE_TABLE, 'attribute_id', self::ATTRIBUTE_TABLE, 'id', 'CASCADE', 'CASCADE');

        $this->createTable(self::VALUE_TABLE, [
            'id' => $this->primaryKey(),
            'entity_id' => $this->integer(),
            'attribute_id' => $this->integer(),
            'item_id' => $this->integer(),
            'value' => $this->text(),
        ], $tableOptions);

        $this->createIndex('eav_value_entity_id', self::VALUE_TABLE, ['entity_id']);
        $this->createIndex('eav_value_attribute_id', self::VALUE_TABLE, ['attribute_id']);
        $this->createIndex('eav_value_item_id', self::VALUE_TABLE, ['item_id']);
        $this->addForeignKey('fk_eav_value_entity', self::VALUE_TABLE, 'entity_id', self::ENTITY_TABLE, 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_eav_value_attribute', self::VALUE_TABLE, 'attribute_id', self::ATTRIBUTE_TABLE, 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_eav_attribute_type', self::ATTRIBUTE_TABLE);
        $this->dropForeignKey('fk_eav_option_attribute', self::ATTRIBUTE_OPTION_TABLE);
        $this->dropForeignKey('fk_eav_entity_model', self::ENTITY_TABLE, 'model_id');
        $this->dropForeignKey('fk_eav_entity_attribute_entity', self::ENTITY_ATTRIBUTE_TABLE);
        $this->dropForeignKey('fk_eav_entity_attribute_attribute', self::ENTITY_ATTRIBUTE_TABLE);
        $this->dropForeignKey('fk_eav_value_entity', self::VALUE_TABLE);
        $this->dropForeignKey('fk_eav_value_attribute', self::VALUE_TABLE);

        $this->dropTable(self::ATTRIBUTE_TABLE);
        $this->dropTable(self::ATTRIBUTE_OPTION_TABLE);
        $this->dropTable(self::ATTRIBUTE_TYPE_TABLE);
        $this->dropTable(self::ENTITY_TABLE);
        $this->dropTable(self::ENTITY_ATTRIBUTE_TABLE);
        $this->dropTable(self::ENTITY_MODEL_TABLE);
        $this->dropTable(self::VALUE_TABLE);
    }

}
