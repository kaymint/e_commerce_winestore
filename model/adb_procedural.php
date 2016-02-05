<?php
/**
 * Created by PhpStorm.
 * User: StreetHustling
 * Date: 2/5/16
 * Time: 7:03 PM
 */


define("DB_HOST", 'localhost');

define("DB_NAME", 'e_commerce_winery');
define("DB_PORT", 3306);
define("DB_USER","root");
define("DB_PWORD","");


class adb_procedural extends mysqli{

    var $result;
    var $link;

    /**
     * adb_procedural constructor.
     */
    function adb_procedural(){
        $this->link = $this->connect();
    }

    /**
     *returns a row from a data set
     */
    function connect(){
        $mysqli_link = mysqli_connect(DB_HOST, DB_USER, DB_PWORD, DB_NAME);

        if(mysqli_connect_errno()){
            printf("Connection to database failed: %s\n", mysqli_connect_errno());
        }

        return $mysqli_link;
    }

    /**
     * connect to db and run a query
     */
    function query($str_query){

        if(!isset($this->link)){
            $this->link = $this->connect();
        }
        $mysqli_result = mysqli_query($this->link,$str_query);
        $this->result = $mysqli_result;

        if($mysqli_result){

            return true;
        }

        return false;
    }


    function fetch(){

        return mysqli_fetch_assoc($this->result);
    }


    /**
     * returns number of rows in current dataset
     */
    function get_num_rows(){

        return mysqli_num_rows($this->result);
    }

    /**
     *returns last auto generated id
     */
    function get_insert_id(){

        return mysqli_insert_id($this->link);
    }

    /**
     * Function to close the sql connection
     */
    function close_connection(){

        return mysqli_close($this->link);
    }
}

//$obj = new adb_procedural();
//echo $obj->get_insert_id();
//if($obj->query('SELECT * FROM wine')){
//    echo 'Query Worked';
//    $row = $obj->fetch();
//    echo $row['wine_name'];
//    echo $obj->get_num_rows();
//}else{
//    echo 'Query did not work';
//}


