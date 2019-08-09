<?php
if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=="127.0.0.1" || $_SERVER['HTTP_HOST']=="192.168.1.1"  || $_SERVER['HTTP_HOST']=="[::1]") {
    //Localhhost
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "recoil";
} else {
    //Server
    $servername = "localhost";
    $username = "shobizie_1920";
    $password = "Vjapnp@2018";
    $database = "shobizie_2019";
}


// Create connection
$db = new mysqli( $servername, $username, $password, $database );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


date_default_timezone_set('Asia/Kolkata');
?>