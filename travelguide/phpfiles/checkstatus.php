<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 11/12/2017
 * Time: 23:46
 */
include_once "dbconect/User.php";

global $imagePath;

if (isset($_SESSION["userName"]) && isset($_SESSION["emailUser"])){
    $findUser = new User();
    $findUser = $findUser ->find($_SESSION["userName"], $_SESSION["emailUser"], '%');
    if($findUser){
        //print_r($findUser);
        $imagePath = $findUser[0]->profilepicture;
        if($findUser[0]->status !== "active"){
            unset($_SESSION["userName"], $_SESSION["emailUser"]);
            header('location: index.php');
        }
    }
}
