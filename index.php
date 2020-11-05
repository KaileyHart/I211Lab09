<?php

/*
 * Author: Kailey Hart, Laura Fasig
 * Date: 11/04/2020
 * Name: index.php
 * Description: Homepage
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file

$action = "register";
if (isset($_GET['action']) && !(empty($_GET['action'])))
    $action = $_GET['action'];


//invoke appropriate method depending on action value
if($action === 'register') {

    $user_controller->RegisterUser();

} else if ($action === 'login') {

    $user_controller->Login();
}
else if ($action === 'index') {

    $user_controller->displayIndex();
}
else if ($action === 'verify') {
    $user_controller->Verify();
}
else if ($action === 'logout') {
    $user_controller->Logout();
}
else if ($action === 'reset') {
    $user_controller->Reset();
}
else if ($action === 'do_reset') {
    $user_controller->ResetConfirm();
}
else if ($action === 'error'){
    //default error message
    $message = "We are sorry, but an error has occurred.";

    //retrieve the error message
    if ((isset($_GET['message'])) && !(empty($_GET['message'])))
        $message = $_GET['message'];

    $user_controller->error($message);
}
else {
    $message = "Invalid action was requested.";
    $user_controller->error($message);
}