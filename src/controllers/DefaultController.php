<?php

namespace quoma\modules\config\controllers;

use quoma\core\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
