<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 09-08-2019
 * Time: 10:53
 */


session_start();

//Database
include '../config/db.php';

//All variable here
$data = array();
$message = '';
$valid = false;

if (isset($_POST['username']) && !empty($_POST['username']))
{
    $username = $_POST['username'];
    $query = $db->query(" SELECT t.* FROM recoil.super_admin_users t WHERE t.email_id = '$username'");
    $q = $query->num_rows;
    if($q>0)
    {
        $row = mysqli_fetch_array($query);
        if($row['status'] == 'Active')
        {
            if ($username == $row['email_id'])
            {
                $_SESSION['admin_id'] = $row['admin_id'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['email_id'] = $row['email_id'];
                $_SESSION['user_type'] = $row['user_type'];
                $hour = time() + 3600 * 24 * 30;
                setcookie('admin_id', $row['admin_id'], $hour);
                setcookie('first_name', $row['first_name'], $hour);
                setcookie('email_id', $row['email_id'], $hour);
                setcookie('user_type', $row['user_type'], $hour);
                $valid = true;
                $message = "Logged in successfully";
                $data = array( "valid" => $valid, "message" => $message );
            }
            else
            {
                $valid = false;
                $message = "Incorrect credentials";
                $data = array( "valid" => $valid, "message" => $message );
            }
        }
        else
        {
            $valid = false;
            $message = "Users not active contact administrator";
            $data = array( "valid" => $valid, "message" => $message );
        }
    }
    else
    {
        $valid = false;
        $message = "Users not register with us";
        $data = array( "valid" => $valid, "message" => $message );
    }
    echo json_encode( $data );
}

