<?php
/**
 * Created by PhpStorm.
 * User: StreetHustling
 * Date: 1/22/16
 * Time: 3:00 PM
 */


include_once 'adb.php';

class user extends adb{

    function user(){}

    //add new user
    function add_user($user_name, $password){
        $str_query =  "INSERT into users SET
                   user_name = '$user_name',
                   password = '$password'";

        return $this->query($str_query);
    }


    /**
     * function edit user password details
     */
    function edit_password($user_name, $password){
        $str_query = "UPDATE se_users SET
                password = '$password'
                WHERE user_name = '$user_name'";

        return $this->query($str_query);
    }

    /**
     * function edit user password details
     */
    function edit_password_byId($id, $password){
        $str_query = "UPDATE se_users SET
                password = '$password'
                WHERE user_id = $id";

        return $this->query($str_query);
    }

    /*
     *
     */
    function get_user($user_name, $pass){
        $str_query = "SELECT * FROM users
                WHERE user_name = '$user_name' AND password = '$pass'";

        return $this->query($str_query);
    }

    function get_user_byId($id){
        $str_query = "SELECT * FROM users
                WHERE user_id = $id";

        return $this->query($str_query);
    }

}