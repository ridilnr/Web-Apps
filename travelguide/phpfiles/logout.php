<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 11/12/2017
 * Time: 22:14
 */
require_once "../dbconect/User.php";

if (isset($_SESSION["userName"]) && isset($_SESSION["emailUser"])){
    $findUser = new User();
    $status = "inactive";
    $findUser = $findUser ->find($_SESSION["userName"], $_SESSION["emailUser"], '%');
    unset($_SESSION["userName"], $_SESSION["emailUser"]);

    if($findUser){
        //print_r($findUser);
        $findUser[0]->status = $status;
        $findUser[0]->update();
        header('location: ../index.php');
    }else{
        echo "Something weird has happened. Contact admin please";
    }
}
