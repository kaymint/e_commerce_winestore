<?php
/**
 * Created by PhpStorm.
 * admin: StreetHustling
 * Date: 1/22/16
 * Time: 3:00 PM
 */


include_once 'adb.php';

class admin extends adb{

    function admin(){}

    //add new admin
    function add_admin($user_name, $password){
        $str_query =  "INSERT into admin SET
                   user_name = '$user_name',
                   password = '$password'";

        return $this->query($str_query);
    }


    /**
     * function edit admin password details
     */
    function edit_password($user_name, $password){
        $str_query = "UPDATE admins SET
                password = '$password'
                WHERE user_name = '$user_name'";

        return $this->query($str_query);
    }

    /**
     * function edit admin password details
     */
    function edit_password_byId($id, $password){
        $str_query = "UPDATE se_admin SET
                password = '$password'
                WHERE admin_id = $id";

        return $this->query($str_query);
    }

    /*
     *
     */
    function get_admin($user_name, $pass){
        $str_query = "SELECT * FROM admin
                WHERE user_name = '$user_name' AND password = '$pass'";

        return $this->query($str_query);
    }

    function get_admin_byId($id){
        $str_query = "SELECT * FROM admin
                WHERE admin_id = $id";

        return $this->query($str_query);
    }

}

