<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: user_controller.class.php
 * Description: Defines the UserController Class.
 */


class UserController
{
    //Variables
    private $index;
    private $register;
    private $login;
    private $verify;
    private $logout;
    private $reset;
    private $do_reset;
    private $error;

    //constructor
    public function __construct()
    {
        $this->index = new Index();
        $this->register = new Register();
        $this->login = new Login();
        $this->verify = new Verify();
        $this->logout = new Logout();
        $this->reset = new Reset;
        $this->do_reset = new ResetConfirm();
        $this->error = new UserError();
    }

    //Displays the Index Page
    public function displayIndex() {
        $view = new Index();

        $view->display();

    }

    //Displays the register page
    public function registerUser() {

        $view = new Register();

        $view->display();

    }

    //Displays the login page
    public function login() {

        $view = new Login();

        $view->display();
    }

    //Displays the login page
    public function verify() {

        $view = new Verify();

        $view->display();
    }

    //Displays the logout page
    public function logout() {

        $view = new Logout();

        $view->display();
    }

    //Displays the reset Password page
    public function reset() {

        $view = new Reset();

        $view->display();
    }

    //Displays the reset confirm Password page
    public function doReset() {

        $view = new ResetConfirm();

        $view->display();
    }


    //displays an error message
    public function error($message) {
    //create an object of the Error class
    $error = new UserError();

    //display the error page
    $error->display($message);

}









}