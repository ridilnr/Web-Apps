<?php
session_start();
require_once "dbconnect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['firstName']) && isset($_POST['lastName']) &&
        isset($_POST['phoneCode']) && isset($_POST['phoneNum']) &&
        isset($_POST['email']) && isset($_POST['password'])){
        if(ctype_digit($_POST['phoneNum']) && is_numeric($_POST['phoneNum'])){
            if(strlen($_POST['phoneCode'].$_POST['phoneNum']) > 15){
                $_SESSION["errorRegister"] = "Your phone number length is more than 15";
                header("location: index.php");
                return;
            }
        }else{
            $_SESSION["errorRegister"] = "Please enter a valid phone number";
            header("location: index.php");
            return;
            //die("PHONE INCORRECT");
        }
        $target_dir = "../uploads/";
        if(!empty($_FILES["frontIdCard"]["name"]) && !empty($_FILES["backIdCard"]["name"]) && !empty($_FILES["proofResidence"]["name"])){
            $userType = "user";
            //
            $imageFileTypeFront = strtolower(pathinfo($_FILES["frontIdCard"]["name"],PATHINFO_EXTENSION));
            $imageFileTypeBack = strtolower(pathinfo($_FILES["backIdCard"]["name"],PATHINFO_EXTENSION));
            $imageFileTypeProof = strtolower(pathinfo($_FILES["proofResidence"]["name"],PATHINFO_EXTENSION));
            //
            $frontIdCardImage = $target_dir."idcard/".$_POST["firstName"].$_POST["lastName"]."-front".rand(1000, 9999).".".$imageFileTypeFront;
            $backIdCardImage = $target_dir."idcard/".$_POST["firstName"].$_POST["lastName"]."-back".rand(1000, 9999).".".$imageFileTypeBack;
            $proofResidenceImage = $target_dir."proof/".$_POST["firstName"].$_POST["lastName"].rand(1000, 9999).".".$imageFileTypeProof;
            //
            if(($imageFileTypeFront !== "jpg" && $imageFileTypeFront !== "png" && $imageFileTypeFront !== "jpeg") ||
                ($imageFileTypeBack !== "jpg" && $imageFileTypeBack !== "png" && $imageFileTypeBack !== "jpeg") ||
                ($imageFileTypeProof !== "jpg" && $imageFileTypeProof !== "png" && $imageFileTypeProof !== "jpeg")) {
                $_SESSION["errorRegister"] = "Sorry, only JPG, JPEG & PNG files are allowed";
                header("location: index.php");
                return;
            }else{
                if (($_FILES["frontIdCard"]["size"] > 1000000) || ($_FILES["backIdCard"]["size"] > 1000000) || ($_FILES["proofResidence"]["size"] > 1000000)) {
                    $_SESSION["errorRegister"] = "All your files must be less than 1 MB";
                    header("location: index.php");
                    return;
                }else{
                    if (move_uploaded_file($_FILES["frontIdCard"]["tmp_name"], $frontIdCardImage) &&
                        move_uploaded_file($_FILES["backIdCard"]["tmp_name"], $backIdCardImage) &&
                        move_uploaded_file($_FILES["proofResidence"]["tmp_name"], $proofResidenceImage)) {
                        $statement = $pdo->prepare('INSERT INTO userinfo (firstname, lastname, phoneno, emailid, password, frpage, bkpage, proof, usertype)
                                                          VALUES ( :firstname, :lastname, :phoneno, :emailid, :password, :frpage, :bkpage, :proof, :usertype)');
                        try {
                            $statement->execute(array(
                                    ':firstname' => htmlentities($_POST['firstName']),
                                    ':lastname' => htmlentities($_POST['lastName']),
                                    ':phoneno' => htmlentities($_POST['phoneCode'].$_POST['phoneNum']),
                                    ':emailid' => htmlentities($_POST['email']),
                                    ':password' => hash('md5', htmlentities($_POST['password'])),
                                    ':frpage' => htmlentities($frontIdCardImage),
                                    ':bkpage' => htmlentities($backIdCardImage),
                                    ':proof' => htmlentities($proofResidenceImage),
                                    ':usertype' => $userType
                                )
                            );
                            $_SESSION["successRegister"] = "Congratulation !! Your registration was successful !";
                            header("location: ../index.php");
                            return;
                        }catch (PDOException $e){
                            if($e->errorInfo[1] === 1062){
                                $_SESSION["errorRegister"] = "A user with same email address already exists";
                                header("location: index.php");
                                return;
                            }else{
                                $_SESSION["errorRegister"] = "An unexpected error occurred. Please contact admin.";
                                header("location: index.php");
                                return;
                            }
                        }
                    } else {
                        $_SESSION["errorRegister"] = "Sorry, An error occur while uploading your files";
                        header("location: index.php");
                        return;
                    }
                }
            }

        }else{
            $_SESSION["errorRegister"] = "Please upload all required images";
            header("location: index.php");
            return;
        }
    }else{
        $_SESSION["errorRegister"] = "Please fill up all fields of the form";
        header("location: index.php");
        return;
    }
}