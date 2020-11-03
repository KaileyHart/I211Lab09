<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: ResetConfirm.class.php
 * Description: Defines the ResetConfirm Class that displays a confirmation message indicating whether the user reset password was successful or failed
 */


class ResetConfirm extends View
{
    public function display() {
        //call the header method defined in the parent class to add the header
        parent::header();
        ?>


        <div class="top-row">RESET PASSWORD</div>

        <!-- middle row -->
        <div class="middle-row">
            <p>You have successfully reset your password.</p>
        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Want to log out? <a href="index.php?action=logout">Logout</a></span>
            <span style="float: left">Don't have an account? <a href="index.php?action=register">Register</a></span>

        </div>
        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }

}