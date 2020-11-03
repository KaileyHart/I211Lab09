<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: index.class.php
 * Description: Defines the Index Class and a public display() method.
 */
require_once ("views/view.class.php");


class Index extends View
{

    public function display() {
        //call the header method defined in the parent class to add the header
        parent::header();
        ?>


        <div class="top-row">Login</div>

        <!-- middle row -->
        <div class="middle-row">
            <p>You have successfully logged in.</p>

        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Want to log out? <a href="index.php?action=logout">Logout</a></span>
            <span style="float: right">Reset Password? <a href="index.php?action=reset">Reset</a></span>
        </div>
        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }

}