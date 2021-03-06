<?php
/*
 * This file is part of the Custom CMF example.
 *
 * @link      https://github.com/itcreator/custom-cmf for the canonical source repository
 * @copyright Copyright (c) 2014 Vital Leshchyk <vitalleshchyk@gmail.com>
 * @license   https://github.com/itcreator/custom-cmf-example/blob/master/LICENSE
 */

namespace CmfExample\Demo\Controller;

use Cmf\Controller\AbstractController;

/**
 * Demo controller for Custom CMF
 *
 * @author Vital Leshchyk <vitalleshchyk@gmail.com>
 */
class DemoController extends AbstractController
{
    public function defaultAction()
    {
        return [
            'msg' => 'Hi, Dear Friend!',
        ];
    }
}
