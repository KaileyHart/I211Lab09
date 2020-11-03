<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: verify.class.php
 * Description: Defines the Verify Class that displays a confirmation message after a user has attempted to log in.
 */


class Verify extends View
{
    public function display() {

        //call the header method defined in the parent class to add the header
        parent::header();
        ?>
        <!-- page specific content starts -->
        <!-- top row for the page header  -->
        <div class="top-row">CREATE AN ACCOUNT</div>

        <!-- middle row -->
        <div class="middle-row">
            <p>Your account has been successfully created.</p>

        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>

        </div>
        <!-- page specific content ends -->


        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }


}