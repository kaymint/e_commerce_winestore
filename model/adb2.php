<?php
/**
 * Created by PhpStorm.
 * User: StreetHustling
 * Date: 2/5/16
 * Time: 2:04 PM
 */


/**
 * author:
 * date:
 * description: A root class for all manage classes. This class communicates with DB
 */

define("DB_HOST", 'localhost');

define("DB_NAME", 'e_commerce_winery');
define("DB_PORT", 3306);
define("DB_USER","root");
define("DB_PWORD","");

class adb
{

    var $link;

    /* query result resource*/
    var $result;

//    function adb ( )
//    {
//        $this->link=false;
//        $this->result = false;
//    }



    /**
     * creates connection to database
     */
    function establish_connection  ( )
    {

        if($this->link)
        {
            return true;
        }
        //try to connect to db
        $this->link = mysqli_connect(DB_HOST, DB_USER, DB_PWORD, DB_NAME);

        if (!$this->link) {
            //if connection fail log error and set $str_error
            echo "not connected";	//debug line
            return false;
        }

        return true;
    }


    /**
     *returns a row from a data set
     */
    function fetch ( )
    {
        return mysqli_fetch_assoc ( $this->result );
    }

    /**
     * connect to db and run a query
     */
    function query ( $str_sql )
    {

        if ( !$this->establish_connection ( ) )
        {
            return false;
        }

        $this->result = mysqli_query($str_sql,$this->link);
        if (!$this->result) {

            return false;
        }

        return true;
    }

    /**
     * returns number of rows in current dataset
     */
    function get_num_rows ( )
    {
        return mysqli_num_rows($this->result);
    }

    /**
     *returns last auto generated id
     */
    function get_insert_id ( )
    {
        return mysqli_insert_id($this->link);
    }

    /**
     * Function to close the sql connection
     */
    function close_connection ( )
    {
        return mysqli_close ( $this->link );
    }

}

