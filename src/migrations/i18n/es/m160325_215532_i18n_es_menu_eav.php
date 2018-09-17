<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

class m160325_215532_i18N_es_menu_eav extends yii\db\Migration
{
    public function up()
    {
	    $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav', 'label' => 'Campos Personalizados', 'language' => 'es-ES']);
	    $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-eav', 'label' => 'Campos', 'language' => 'es-ES']);
	    $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-attribute', 'label' => 'Atributos', 'language' => 'es-ES']);
	    $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-option', 'label' => 'Opciones', 'language' => 'es-ES']);
	    $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-model', 'label' => 'Modelos', 'language' => 'es-ES']);
	    $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-type', 'label' => 'Tipos', 'language' => 'es-ES']);
    }
}