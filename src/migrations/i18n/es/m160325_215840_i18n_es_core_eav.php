<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\db\TranslatedMessagesMigration;

class m160325_215840_i18N_es_core_eav extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'es-ES';
    }

    public function getCategory()
    {
        return 'core/eav';
    }

    public function getTranslations()
    {
        return [
            'An error occurred during creation of EavValue record.' => 'Se ha producido un error durante la creación del registro EavValue.',
            'An error occurred during saving EAV attributes!' => '¡Se ha producido un error al guardar los atributos EAV!',
            'Attribute Options' => 'Opciones de Atributos',
            'Attribute Types' => 'Tipos de Atributos',
            'Attribute' => 'Atributo',
            'Attributes' => 'Atributos',
            'Available Attributes' => 'Atributos Disponibles',
            'Custom Fields' => 'Campos Personalizados',
            'EAV' => 'EAV',
            'Entity Models' => 'Modelos de Entidad',
            'Entity was not found.' => 'No se encontró la Entidad.',
            'Entity' => 'Entidad',
            'Model was not found.' => 'No se encontró el Modelo.',
            'Model' => 'Modelo',
            'Option' => 'Opcion',
            'Raw' => 'Raw',
            'Selected Attributes' => 'Atributos Seleccionados',
        ];
    }
}