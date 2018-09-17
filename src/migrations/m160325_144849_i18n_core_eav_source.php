<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\db\SourceMessagesMigration;

class m160325_144849_i18N_core_eav_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'core/eav';
    }

    public function getMessages()
    {
        return [
            'An error occurred during creation of EavValue record.' => 1,
            'An error occurred during saving EAV attributes!' => 1,
            'Attribute Options' => 1,
            'Attribute Types' => 1,
            'Attribute' => 1,
            'Attributes' => 1,
            'Available Attributes' => 1,
            'Custom Fields' => 1,
            'EAV' => 1,
            'Entity Models' => 1,
            'Entity was not found.' => 1,
            'Entity' => 1,
            'Model was not found.' => 1,
            'Model' => 1,
            'Option' => 1,
            'Raw' => 1,
            'Selected Attributes' => 1,
        ];
    }
}