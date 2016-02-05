<?php
session_start();
/**
 * Created by PhpStorm.
 * User: StreetHustling
 * Date: 1/27/16
 * Time: 6:36 PM
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


function signup(){
    if(filter_input (INPUT_GET, 'user') & filter_input (INPUT_GET, 'pass')) {

        $obj = get_admin_model();

        $username = sanitize_string(filter_input (INPUT_GET, 'user'));
        $password = sanitize_string(filter_input (INPUT_GET, 'pass'));
        $password = encrypt($password);

        if ($obj->add_admin($username, $password)){
            setSessionValues($username);

            header("Location: http://localhost/e_commerce/view/wine_view.php");
        }
        else
        {
            echo '{"result":0,"message": "signup unsuccessful"}';
        }
    }
}


function login(){
    if(filter_input (INPUT_GET, 'user') & filter_input (INPUT_GET, 'pass')) {

        $obj = get_admin_model();

        $username = sanitize_string(filter_input (INPUT_GET, 'user'));
        $password = sanitize_string(filter_input (INPUT_GET, 'pass'));
        $password = encrypt($password);

        if ($obj->get_admin($username, $password)){

            $row = $obj->fetch();

            if(strcmp($password,$row['password']) == 0){
                setSessionValues($username);
                echo '{"result":1,"message": "signup unsuccessful"}';
//                header("Location: http://localhost/e_commerce/view/wine_view.php");
            }else{
                echo '{"result":0,"message": "signup unsuccessful"}';
            }
        }
        else
        {
            echo '{"result":0,"message": "signup unsuccessful"}';
        }
    }
}

function logout(){
    session_destroy();

    header("Location: http://localhost/e_commerce/view/login.php");
}

function setSessionValues($username){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'Administrator';
    $_SESSION['current_session'] = session_id();
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
 * @return admin
 */
function get_admin_model(){
    require_once '../model/admin.php';
    $obj = new admin();
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
