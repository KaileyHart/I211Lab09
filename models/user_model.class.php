<?php
/**
 * Author: Lauren Fasig
 * Date: 11/3/2020
 * File: user_model.class.php
 * Description:
 */

class UserModel {
    //database object
    private $db;
    //database connection object
    private $dbConnection;
    private $users = [];
    private $username = "username";
    private $password = "password";

    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }

    public function add_user() {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getUserTable();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store users
            $users = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $user = new User($query_row["id"],
                    $query_row["username"],
                    $query_row["password"],
                    $query_row["email"],
                    $query_row["firstname"],
                    $query_row["lastname"]);

                //push user into the array
                $users[] = $user;
            }
            return $users;
        }
        return false;

        //password_hash($password , $algo) : false;
    }

    public function verify_user() {


        //create cookie
        $cookie_name = "username";
        $cookie_value = $this->getUserName();
        setcookie($cookie_name, $cookie_value);

        //check if cookie is set
        if(!isset($_COOKIE[$cookie_name])) {
            return false;
        } else {
            //password_verify ($password , $hash);
            return true;
        }
    }

    public function logout() {
        //clear cookie
        setcookie("username", "");
        return true;
    }

    public function reset_password() {


        //password_hash($password , $algo) : false;
    }
}