<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 26/12/2017
 * Time: 19:06
 */

function updateUser($uName){
    if (!empty($uName)){
        $findUser = new User();
        $findUser = $findUser ->findThis($_SESSION["iduser"]);
        if($findUser){
            $fname = $_POST["editUname"];
            $email = $_POST["editEmail"];
            $phone = $_POST["editPhone"];
            $password = $_POST["editPassword"];
            $findUser->fname = strtolower($fname);
            $findUser->email = strtolower($email);
            $findUser->phone = $phone;
            $findUser->password = $password;

            if(isset($_FILES['editAvatar']) and $_FILES['editAvatar'] !== "") {
                if (!empty($_FILES['editAvatar']['name'])) {
                    $rand = rand(1000, 9999);
                    $extension = pathinfo("../images/profile/".basename($_FILES['editAvatar']['name']), PATHINFO_EXTENSION);
                    if (move_uploaded_file($_FILES['editAvatar']['tmp_name'], "../images/profile/" . "profile". $rand .".". $extension)) {
                        $findUser->profilepicture = "images/profile/" . "profile". $rand .".". $extension;
                        $imagePath = $findUser->profilepicture;
                    }
                }
            }else{
                $existingImage = $findUser->profilepicture;
                $findUser->profilepicture = $existingImage;
            }
            if($findUser->update()){
                $_SESSION["userName"] = $findUser->fname;
                $_SESSION["emailUser"] = $findUser->email;
                //header('location: realapp.php?result=5');
            }else{
                //header('location: realapp.php?result=6');
            }
        }
        unset($_POST["editUname"]);
        unset($_POST["editEmail"]);
        unset($_POST["editPhone"]);
    }
}
