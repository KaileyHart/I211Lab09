<?php
/*
 * Author: Kailey Hart
 * Date: 10/30/2020
 * Name: register.class.php
 * Description: Defines the Register Class that displays a confirmation message after a user creates an acct
 */


class Register extends View
{
    public function display() {
        //call the header method defined in the parent class to add the header
        parent::header();
        ?>


        <div class="top-row">Create an Account</div>

        <!-- middle row -->
        <div class="middle-row">
            <p>Please complete the entire form. All fields are required.</p>
            <form action="verify" method="post" style="display: flex; flex-direction: column" >
                <input style="margin-bottom: 25px; color: #a9a9a9" type="text" value="Username" required >
                <input style="margin-bottom: 25px;  color: #a9a9a9" type="text" value="Password, 5 characters minimum" required min="5">
                <input style="margin-bottom: 25px; color: #a9a9a9" type="email" value="Email" required>
                <input style="margin-bottom: 25px; color: #a9a9a9" type="text" value="First Name" required>
                <input style="margin-bottom: 25px; color: #a9a9a9" type="text" value="Last Name" required>
                <input action="verify" style="background-color: #000; color: #fff; padding: 12px; border: none;"type="submit" value="REGISTER">
            </form>

        </div>

        <!-- bottom row for links  -->
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>

        </div>
        <?php
        //call the footer method defined in the parent class to add the footer
        parent::footer();
    }

}