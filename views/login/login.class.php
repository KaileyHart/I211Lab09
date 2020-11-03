<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: login.class.php
 * Description: Defines the Login Class that displays the login form.
 */


class Login extends View
{
    public function display() {
    //call the header method defined in the parent class to add the header
    parent::header();
    ?>


    <div class="top-row">Login</div>

    <!-- middle row -->
    <div class="middle-row">
        <p>Please enter your username and password.</p>
        <form action="login" method="post" style="display: flex; flex-direction: column" >
            <input style="margin-bottom: 25px; color: #a9a9a9" type="text" value="Username" required >
            <input style="margin-bottom: 25px;  color: #a9a9a9" type="text" value="Password" required min="5">
            <input style="background-color: #000; color: #fff; padding: 12px; border: none;" type="submit" value="LOGIN">
        </form>

    </div>

    <!-- bottom row for links  -->
    <div class="bottom-row">
        <span style="float: left">Don't have an account? <a href="index.php?action=register">Register</a></span>

    </div>
    <?php

    //call the footer method defined in the parent class to add the footer
    parent::footer();
}

}