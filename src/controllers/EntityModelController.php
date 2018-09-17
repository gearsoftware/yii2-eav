<?php

/**
 * @package   Yii2-EAV
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\eav\controllers;

use gearsoftware\controllers\BaseController;

/**
 * EavEntityModelController implements the CRUD actions for gearsoftware\eav\models\EavEntityModel model.
 */
class EntityModelController extends BaseController
{
    public $modelClass = 'gearsoftware\eav\models\EavEntityModel';
    public $modelSearchClass = 'gearsoftware\eav\models\search\EavEntityModelSearch';

    public $disabledActions = ['view', 'bulk-activate', 'bulk-deactivate'];

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}