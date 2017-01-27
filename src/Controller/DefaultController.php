<?php

namespace src\Controller;

use \src\View\View;

class DefaultController extends Controller
{
    public function indexAction(){
        $view = new View('default','index');
        return $view->renderView(['default'=>null]);
    }
}