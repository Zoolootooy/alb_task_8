<?php

namespace application\controllers;

use application\core\Config;
use application\core\Controller;
use application\core\Request;
use application\models\ModelCountry;
use application\models\ModelMain;

class ControllerMain extends Controller
{


    public function index()
    {
        $this->view->generate('form.php');
    }

    public function p()
    {
        $post = Request::post();
        $this->view->generate('p.php', ['post' => $post]);
    }
}