<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

class m160325_143610_add_eav_permissions extends yii\db\Migration
{

    public function safeUp()
    {
        $this->insert('{{%auth_item_group}}', ['code' => 'eavManagement', 'name' => 'EAV Management', 'created_at' => '1440180000', 'updated_at' => '1440180000']);

        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/default/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/default/index', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/default/get-attributes', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/default/set-attributes', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/default/get-categories', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/bulk-delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/create', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/grid-page-size', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/grid-sort', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/index', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/toggle-attribute', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute/update', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/bulk-delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/create', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/grid-page-size', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/grid-sort', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/index', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/toggle-attribute', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-option/update', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/bulk-delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/create', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/grid-page-size', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/grid-sort', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/index', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/toggle-attribute', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/attribute-type/update', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/*', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/bulk-delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/create', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/delete', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/grid-page-size', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/grid-sort', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/index', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/toggle-attribute', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => '/admin/eav/entity-model/update', 'type' => '3', 'created_at' => '1440180000', 'updated_at' => '1440180000']);

        $this->insert('{{%auth_item}}', ['name' => 'viewEavRecords', 'type' => '2', 'description' => 'View EAV records', 'group_code' => 'eavManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => 'editEavRecords', 'type' => '2', 'description' => 'Edit EAV records', 'group_code' => 'eavManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => 'deleteEavRecords', 'type' => '2', 'description' => 'Delete EAV records', 'group_code' => 'eavManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);
        $this->insert('{{%auth_item}}', ['name' => 'createEavRecords', 'type' => '2', 'description' => 'Create EAV records', 'group_code' => 'eavManagement', 'created_at' => '1440180000', 'updated_at' => '1440180000']);

        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/default/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/default/get-attributes']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/default/get-categories']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute/grid-page-size']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute/grid-sort']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute-option/grid-page-size']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute-option/grid-sort']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute-option/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute-type/grid-page-size']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute-type/grid-sort']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/attribute-type/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/entity-model/grid-page-size']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/entity-model/grid-sort']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'viewEavRecords', 'child' => '/admin/eav/entity-model/index']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/default/set-attributes']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/attribute/toggle-attribute']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/attribute/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/attribute-option/toggle-attribute']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/attribute-option/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/attribute-type/toggle-attribute']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/attribute-type/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/entity-model/toggle-attribute']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => '/admin/eav/entity-model/update']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'createEavRecords', 'child' => '/admin/eav/attribute/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'createEavRecords', 'child' => '/admin/eav/attribute-option/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'createEavRecords', 'child' => '/admin/eav/attribute-type/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'createEavRecords', 'child' => '/admin/eav/entity-model/create']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/attribute/bulk-delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/attribute/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/attribute-option/bulk-delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/attribute-option/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/attribute-type/bulk-delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/attribute-type/delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/entity-model/bulk-delete']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => '/admin/eav/entity-model/delete']);

        $this->insert('{{%auth_item_child}}', ['parent' => 'editEavRecords', 'child' => 'viewEavRecords']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'createEavRecords', 'child' => 'viewEavRecords']);
        $this->insert('{{%auth_item_child}}', ['parent' => 'deleteEavRecords', 'child' => 'viewEavRecords']);

        $this->insert('{{%auth_item_child}}', ['parent' => \gearsoftware\db\PermissionsMigration::ROLE_PRINCIPAL, 'child' => 'viewEavRecords']);
        $this->insert('{{%auth_item_child}}', ['parent' => \gearsoftware\db\PermissionsMigration::ROLE_PRINCIPAL, 'child' => 'editEavRecords']);
        $this->insert('{{%auth_item_child}}', ['parent' => \gearsoftware\db\PermissionsMigration::ROLE_PRINCIPAL, 'child' => 'createEavRecords']);
        $this->insert('{{%auth_item_child}}', ['parent' => \gearsoftware\db\PermissionsMigration::ROLE_PRINCIPAL, 'child' => 'deleteEavRecords']);
    }

    public function safeDown()
    {
        $this->delete('{{%auth_item_group}}', ['code' => 'eavManagement']);
    }
}