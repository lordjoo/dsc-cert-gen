<?php

use lib\CertMaker;

function makeCT(){
    $pass = require_once "config.php";
    if (!isset($_SESSION['leadLogin']) && !password_verify($_SESSION['leadLogin'],$pass['pass'])){
        header("Location:/ct19/lg");
    }
    if (isset($_POST['name']) && isset($_POST['univ']) && isset($_POST['lead'])){
        $data = [
            "temp"=>"ct",
            "name"=>$_POST['name'],
            "univ"=>$_POST['univ'],
            "lead"=>$_POST['lead'],
        ];
        CertMaker::coreTeam($data);
    }
}

function viewHome(){
    return require_once 'views/home.php';
}
function logLeadPage(){
    return require_once 'views/leadLogin.php';
}

function coreTeamPage(){
    $pass = require_once "config.php";
    if (isset($_SESSION['leadLogin']) && password_verify($_SESSION['leadLogin'],$pass['pass'])){
        return require_once 'views/coreTeam.php';
    } else {
        header("Location:/ct19/lg");
    }
}
function leadLogin(){
    $pass = require_once "config.php";
    $code = $_POST['code'];
    if (!empty($code)){
        if (password_verify($code,$pass['pass'])){
            $_SESSION['invalidCode'] = null;
            $_SESSION['leadLogin'] = $code;
            header("Location:/ct19");
        } else {
            $_SESSION['invalidCode'] = true;
            header("Location:/ct19/lg");
        }
    } else {
        echo "Invalid Request";
    }
}

