<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: reset.class.php
 * Description: Defines the Reset class that displays the password reset form
 */


class Reset extends View
{
    public function display() {
        //call the header method defined in the parent class to add the header
        parent::header();
        ?>


        <div class="top-row">RESET Password</div>

        <!-- middle row -->
        <div class="middle-row">
            <p>Please enter a new password. Username is not changeable</p>
            <form action="reset" method="post" style="display: flex; flex-direction: column" >
                <input style="margin-bottom: 25px; color: #a9a9a9" type="text" value="Username" required >
                <input style="margin-bottom: 25px;  color: #a9a9a9" type="text" value="Password" required min="5">
                <input style="background-color: #000; color: #fff; padding: 12px; border: none;" type="submit" value="RESET PASSWORD">
            </form>

        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Cancel password reset? <a href="index.php?action=login">Cancel Reset</a></span>

        </div>
        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }

}