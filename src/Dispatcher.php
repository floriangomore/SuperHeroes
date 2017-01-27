<?php

namespace src\Dispatcher;

use src\Controller\DefaultController;

class Dispatcher
{
    private $url;
    private $method;
    private $result;
    private $defControl;

    public function __construct($em)
    {
        $this->em = $em; // <-- Doctrine object
        $this->url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->defControl = new DefaultController($this->em);
    }

    public function dispatch()
    {
        if($this->url!=null){
            $this->match($this->url);
            if(isset($this->result[0])&&isset($this->result[1])) {
                $path = __DIR__ . '\\' . ucfirst($this->result[0]) . 'Controller.php';
                $controller = '\\src\\Controller\\' . ucfirst($this->result[0]) . 'Controller';
                $action = $this->result[1] . 'Action';
                if (file_exists($path)) {
                    $theController = new $controller();
                    if (method_exists($theController, $action)) {
                        return $theController->$action($this->result);
                    } else
                        return $this->defControl->indexAction();
                } else
                    return $this->defControl->indexAction();
            }else
                return $this->defControl->indexAction();
        }else
            return $this->defControl->indexAction();
    }

    /**
     * @param $url
     */
    private function match($url){
        $pattern = '/\//';
        $url = trim($url,'\/');
        $this->result = preg_split($pattern,$url);
    }


}