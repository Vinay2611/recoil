<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 09-08-2019
 * Time: 13:00
 */

$admin_id   = isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] : $_COOKIE['admin_id'];
$first_name = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : $_COOKIE['first_name'];
$email_id   = isset($_SESSION['email_id']) ? $_SESSION['email_id'] : $_COOKIE['email_id'];
$user_type  = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : $_COOKIE['user_type'];

