<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 09-08-2019
 * Time: 16:36
 */

class Controller
{
    protected $view;
    public function view( $viewName, $data = [])
    {
        $this->view = new View($viewName,$data);
        return $this->view;
    }

}