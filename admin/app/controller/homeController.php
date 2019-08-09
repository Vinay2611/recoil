<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 09-08-2019
 * Time: 16:17
 */

class homeController extends Controller
{
    public function index( $id ='', $name= '')
    {
        //echo 'I am in '. __CLASS__. 'method'. __METHOD__;
        //echo 'Id: is '. $id .'and name is : ' .$name;
        $this->view('home\index',[
            'name' => $name,
            'id' => $id
        ]);
        $this->view->render();
    }

    public function aboutUs()
    {
        //echo 'I am in '. __CLASS__. 'method'. __METHOD__;
        $this->view('home\aboutUs');
        $this->view->render();
    }
}