<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

class m160325_142311_add_eav_menu_links extends yii\db\Migration
{

    public function safeUp()
    {
        $this->insert('{{%menu_link}}', ['id' => 'eav', 'menu_id' => 'admin-menu', 'image' => 'demo-psi-pen-5', 'created_by' => 1, 'order' => 16]);
        $this->insert('{{%menu_link}}', ['id' => 'eav-eav', 'menu_id' => 'admin-menu', 'link' => '/eav/default/index', 'parent_id' => 'eav', 'created_by' => 1, 'order' => 17]);
        $this->insert('{{%menu_link}}', ['id' => 'eav-attribute', 'menu_id' => 'admin-menu', 'link' => '/eav/attribute/index', 'parent_id' => 'eav', 'created_by' => 1, 'order' => 18]);
        $this->insert('{{%menu_link}}', ['id' => 'eav-option', 'menu_id' => 'admin-menu', 'link' => '/eav/attribute-option/index', 'parent_id' => 'eav', 'created_by' => 1, 'order' => 19]);
        $this->insert('{{%menu_link}}', ['id' => 'eav-model', 'menu_id' => 'admin-menu', 'link' => '/eav/entity-model/index', 'parent_id' => 'eav', 'created_by' => 1, 'order' => 20]);
        $this->insert('{{%menu_link}}', ['id' => 'eav-type', 'menu_id' => 'admin-menu', 'link' => '/eav/attribute-type/index', 'parent_id' => 'eav', 'created_by' => 1, 'order' => 21]);

        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav', 'label' => 'Custom Fields', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-eav', 'label' => 'Fields', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-attribute', 'label' => 'Attributes', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-option', 'label' => 'Options', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-model', 'label' => 'Models', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-type', 'label' => 'Types', 'language' => 'en-US']);
    }

    public function safeDown()
    {
        $this->delete('{{%menu_link}}', ['like', 'id', 'eav-eav']);
        $this->delete('{{%menu_link}}', ['like', 'id', 'eav-attribute']);
        $this->delete('{{%menu_link}}', ['like', 'id', 'eav-option']);
        $this->delete('{{%menu_link}}', ['like', 'id', 'eav-model']);
        $this->delete('{{%menu_link}}', ['like', 'id', 'eav-type']);
        $this->delete('{{%menu_link}}', ['like', 'id', 'eav']);
    }
}