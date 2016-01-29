<?php
/**
 * Created by PhpStorm.
 * User: StreetHustling
 * Date: 1/21/16
 * Time: 1:32 PM
 */

if(filter_input(INPUT_GET, 'page')){

    $page = $page_sanitize = '';
    $page_sanitize = sanitize_string( filter_input (INPUT_GET, 'page'));
    $page = intval($page_sanitize);
}

if(filter_input (INPUT_GET, 'cmd')){
    $cmd = $cmd_sanitize = '';
    $cmd_sanitize = sanitize_string( filter_input (INPUT_GET, 'cmd'));
    $cmd = intval($cmd_sanitize);

    switch ($cmd){
        case 1:
            show_wines();
            break;
        case 2:
            search_wines();
            break;
        case 4:
            get_by_category();
            break;
        case 5:
            sort_by_name();
            break;
        case 6:
            sort_by_price();
            break;
        case 7:
            get_wine_details();
            break;
        case 8:
            get_wine_variety();
            break;
        case 9:
            get_wineries();
            break;
        case 10:
            get_grape_variety();
            break;
        case 11:
            addWine();
            break;
        case 12:
            update_wine();
            break;
        case 3:
            get_wine_types();
            break;
        default:
            echo '{"result":0, "message":"Invalid Command Entered"}';
            break;
    }
}



function update_wine(){
    if(filter_input (INPUT_GET, 'name') & filter_input (INPUT_GET, 'type') & filter_input (INPUT_GET, 'year')
        & filter_input (INPUT_GET, 'winery') & filter_input (INPUT_GET, 'id')) {

        $name = sanitize_string(filter_input(INPUT_GET, 'name'));
        $type = sanitize_string(filter_input(INPUT_GET, 'type'));
        $year = sanitize_string(filter_input(INPUT_GET, 'year'));
        $winery = sanitize_string(filter_input(INPUT_GET, 'winery'));
        $desc = sanitize_string(filter_input(INPUT_GET, 'desc'));
        $image = sanitize_string(filter_input(INPUT_GET, 'image'));
        $id = sanitize_string(filter_input(INPUT_GET, 'id'));


        $obj = get_wine_model();

        if ($obj->update_wine($name, $type, $year, $winery, $desc, $image, $id)) {
            echo '{"result":1,"message": "Wine updated successfully"}';
        } else {
            echo '{"result":0,"message": "Update unsuccessful"}';
        }
    }
}

function addWine(){
    if(filter_input (INPUT_GET, 'name') & filter_input (INPUT_GET, 'type') & filter_input (INPUT_GET, 'year')
        & filter_input (INPUT_GET, 'winery')) {
        $st = '';
        $name = sanitize_string(filter_input(INPUT_GET, 'name'));
        $type = sanitize_string(filter_input(INPUT_GET, 'type'));
        $year = sanitize_string(filter_input(INPUT_GET, 'year'));
        $winery = sanitize_string(filter_input(INPUT_GET, 'winery'));
        $desc = sanitize_string(filter_input(INPUT_GET, 'desc'));
        $image = sanitize_string(filter_input(INPUT_GET, 'image'));

        $obj = get_wine_model();

        if ($obj->add_wine($name, $type, $year, $winery, $desc, $image)) {
            echo '{"result":1,"message": "Wine added successfully"}';
        } else {
            echo '{"result":0,"message": "Add unsuccessful"}';
        }
    }
}

function get_grape_variety(){
    $obj = get_wine_model();

    if ($obj->get_grape_variety()){
        echo '{"result":1, "variety":[';
        $row = $obj->fetch();
        while($row){
            echo json_encode($row);
            if( $row = $obj->fetch()){
                echo ',';
            }
        }
        echo ']}';
    }else{
        echo '{"result":0,"message": "query unsuccessful"}';
    }
}


function get_wineries(){
    $obj = get_wine_model();

    if ($obj->get_wineries()){
        echo '{"result":1, "winery":[';
        $row = $obj->fetch();
        while($row){
            echo json_encode($row);
            if( $row = $obj->fetch()){
                echo ',';
            }
        }
        echo ']}';
    }else{
        echo '{"result":0,"message": "query unsuccessful"}';
    }
}

function get_wine_variety(){
    if(filter_input (INPUT_GET, 'id')) {
        $st = '';
        $st = sanitize_string(filter_input(INPUT_GET, 'id'));

        $obj = get_wine_model();

        if ($obj->get_wine_variety($st)) {
            echo '{"result":1, "wines":[';
            $row = $obj->fetch();
            while ($row) {
                echo json_encode($row);
                if ($row = $obj->fetch()) {
                    echo ',';
                }
            }
            echo ']}';
        } else {
            echo '{"result":0,"message": "query unsuccessful"}';
        }
    }
}

function get_wine_details(){
    if(filter_input (INPUT_GET, 'id')) {
        $st = '';
        $st = sanitize_string(filter_input(INPUT_GET, 'id'));

        $obj = get_wine_model();

        if ($obj->view_wine($st)) {
            echo '{"result":1, "wines":[';
            $row = $obj->fetch();
            while ($row) {
                echo json_encode($row);
                if ($row = $obj->fetch()) {
                    echo ',';
                }
            }
            echo ']}';
        } else {
            echo '{"result":0,"message": "query unsuccessful"}';
        }
    }
}

function sort_by_price(){
    $obj = get_wine_model();

    if ($obj->sort_by_price()){
        echo '{"result":1, "wines":[';
        $row = $obj->fetch();
        while($row){
            echo json_encode($row);
            if( $row = $obj->fetch()){
                echo ',';
            }
        }
        echo ']}';
    }else{
        echo '{"result":0,"message": "query unsuccessful"}';
    }
}


function sort_by_name(){
    $obj = get_wine_model();

    if ($obj->sort_by_name()){
        echo '{"result":1, "wines":[';
        $row = $obj->fetch();
        while($row){
            echo json_encode($row);
            if( $row = $obj->fetch()){
                echo ',';
            }
        }
        echo ']}';
    }else{
        echo '{"result":0,"message": "query unsuccessful"}';
    }
}

function get_by_category(){


    if(filter_input (INPUT_GET, 'cat')) {
        $st = '';
        $st = sanitize_string(filter_input(INPUT_GET, 'cat'));

        $obj = get_wine_model();

        if ($obj->get_wine_by_type($st)) {
            echo '{"result":1, "wines":[';
            $row = $obj->fetch();
            while ($row) {
                echo json_encode($row);
                if ($row = $obj->fetch()) {
                    echo ',';
                }
            }
            echo ']}';
        } else {
            echo '{"result":0,"message": "query unsuccessful"}';
        }
    }
}

function get_wine_types(){
    $obj = get_wine_model();

    if ($obj->get_wine_types()){
        echo '{"result":1, "wine_types":[';
        $row = $obj->fetch();
        while($row){
            echo json_encode($row);
            if( $row = $obj->fetch()){
                echo ',';
            }
        }
        echo ']}';
    }else{
        echo '{"result":0,"message": "query unsuccessful"}';
    }
}


function show_wines(){

    $obj = get_wine_model();

    if ($obj->view_wines()){
        echo '{"result":1, "wines":[';
        $row = $obj->fetch();
        while($row){
            echo json_encode($row);
            if( $row = $obj->fetch()){
                echo ',';
            }
        }
        echo ']}';
    }else{
        echo '{"result":0,"message": "query unsuccessful"}';
    }

}


function search_wines(){

    $obj = get_wine_model();

    if(filter_input (INPUT_GET, 'wine') && filter_input (INPUT_GET, 'type')) {
        $st = '';
        $st = sanitize_string(filter_input(INPUT_GET, 'wine'));
        $type = sanitize_string(filter_input(INPUT_GET, 'type'));
        $type = intval($type);

        $obj = get_wine_model();
        $result = false;

        switch($type){
            case 1:
                //name
                $result = $obj->search_wines($st);

              break;
            case 2:
                //type
                $result = $obj->search_by_type($st);
                break;
            case 3:
                //winnery
                $result = $obj->search_by_winnery($st);
                break;
            case 4:
                //price
                $result = $obj->search_by_price($st);
                break;
            default:
                break;
        }

        if ($result == true) {
            echo '{"result":1, "wines":[';
            $row = $obj->fetch();
            while ($row) {
                echo json_encode($row);
                if ($row = $obj->fetch()) {
                    echo ',';
                }
            }
            echo ']}';
        } else {
            echo '{"result":0,"message": "query unsuccessful"}';
        }
    }
}


/**
 * @return wine
 */
function get_wine_model(){
    require_once '../model/wine.php';
    $obj = new wine();
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
