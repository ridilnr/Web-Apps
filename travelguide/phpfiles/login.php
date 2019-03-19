<?php

require_once "../dbconect/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];
    $status = "active";
    $findUser = new User();
    $findUser = $findUser ->find('%', $email, $password);
    if($findUser){
        //print_r($findUser);
        $_SESSION["userName"] = $findUser[0]->fname;
        $_SESSION["emailUser"] = $findUser[0]->email;
        $_SESSION["iduser"] = $findUser[0]->userid;
        $findUser[0]->status = $status;
        $findUser[0]->update();
        header('location: ../realapp.php?result=3');
    }else{
        header('location: ../index.php?result=4');
    }
}
