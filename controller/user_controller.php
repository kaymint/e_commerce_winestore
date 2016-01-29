<?php
/**
 * Created by PhpStorm.
 * User: StreetHustling
 * Date: 1/27/16
 * Time: 6:12 PM
 */

if(filter_input (INPUT_GET, 'cmd')){
    $cmd = $cmd_sanitize = '';
    $cmd_sanitize = sanitize_string( filter_input (INPUT_GET, 'cmd'));
    $cmd = intval($cmd_sanitize);

    switch ($cmd){
        case 1:
            signup();
            break;
        case 2:
            login();
            break;
        case 3:
            logout();
            break;
        default:
            echo '{"result":0, "message":"Invalid Command Entered"}';
            break;
    }
}


function admin_signup(){
    if(filter_input (INPUT_GET, 'user') & filter_input (INPUT_GET, 'pass')) {

        $obj = get_user_model();

        $username = sanitize_string(filter_input (INPUT_GET, 'user'));
        $password = sanitize_string(filter_input (INPUT_GET, 'pass'));
        $password = encrypt($password);

        if ($obj->add_user($username, $password)){

        }
        else
        {
            echo '{"result":0,"message": "signup unsuccessful"}';
        }
    }
}


/**
 * @param $pass
 * @return string
 */
function encrypt($pass){
    $salt1 = "qm&h*";
    $salt2 = "pg!@";
    $token = hash('ripemd128', "$salt1$pass$salt2");
    return $token;
}

/**
 * @return user
 */
function get_user_model(){
    require_once '../model/user.php';
    $obj = new user();
    return $obj;
}


/**
 * @param $val
 * @return string
 */
function sanitize_string($val){
    $val = stripslashes($val);
    $val = strip_tags($val);
    $val = htmlentities($val);

    return $val;
}
