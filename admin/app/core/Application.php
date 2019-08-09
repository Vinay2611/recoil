<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 09-08-2019
 * Time: 15:24
 */

class Application
{
    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->prepareURL();
        //echo $this->controller , '<br>' , $this->action;
        //echo $_SERVER['REQUEST_URI'];
        if (file_exists(CONTROLLER. $this->controller. '.php')){
            $this->controller = new $this->controller;
            //$this->controller->index();
            if (method_exists($this->controller, $this->action))
            {
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        }
    }

    protected function prepareURL()
    {
        $request = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($request))
        {
            $url = explode('/',$request);
            $this->controller = isset($url[0]) ? $url[0].'Controller' : 'homeController';
            $this->action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }

}