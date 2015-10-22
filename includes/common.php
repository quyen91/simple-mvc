<?php

session_start();

require 'db.php';
require 'models/model.php';

function model($model) {
    static $models = array();
    $model = strtolower($model);
    if (!isset($models[$model])) {
        include ROOT . DS . 'models' . DS . $model . '.php';
        
        $model_name = ucfirst($model);
        $models[$model] = new $model_name();
    }
    
    return $models[$model];
}

function isLogged() {
    if (empty($_SESSION['logged'])) {
        return false;
    }
    
    return $_SESSION['logged'];
}
function isEmptyCart() {

    if (empty($_SESSION['cart'])) {
        return true;
    }
     return $_SESSION['cart'];
}


function render($file, $data) {
    extract($data);
    ob_start();
    
    include ROOT . DS . 'views' . DS . $file;
    
    ob_end_flush();
}

function isPostRequest(){
    return (strtolower($_SERVER['REQUEST_METHOD']) == 'post');
}
function isAdmin(){
    if(isset($_SESSION['logged'])){
        return ($_SESSION['logged']['name']=='admin');
    }
}
function redirect($url){
    header("Location: ".$url);
}