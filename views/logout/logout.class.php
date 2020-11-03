<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: logout.class.php
 * Description: Defines the Logout Class that displays a conformation message after the user has logged
out.
 */


class Logout extends View
{

    public function display() {

        //call the header method defined in the parent class to add the header
        parent::header();
        ?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">LOGIN</div>

        <!-- middle row -->
        <div class="middle-row">
            <p>You have successfully logged out.</p>

        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            <span style="float: right">Don't have an account? <a href="index.php?action=register">Register</a></span>

        </div>
        <!-- page specific content ends -->


        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }

}