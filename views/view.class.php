<?php
/*
 * Author: Louie Zhu
 * Date: 9/25/2018
 * Name: view.class.php
 * Description: define the parent class for all view classes. The two methods create page header and footer.
 */

class View {

    //create the page header
    public static function header() {
//        echo "<h1>Hey from View </h1>"


        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>PeaPOD User Management System</title>
                <link href="www/css/styles.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
                <h1><span style="color: forestgreen; font-family: serif; font-size: 36pt">PeaPOD</span> User Management System</h1>
                <div id="wrapper">
                    <img src="www/img/peapod_logo.png" style="float: right; width: 130px">
                    <?php
                }


                //create the page footer
                public static function footer() {
                    ?>
                </div>
            </body>
        </html>
        <?php
    }

}
