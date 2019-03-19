<?php
include_once "../dbconect/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fname = $_POST["signupUname"];
    $userid = "user".rand(1000, 9999);
    $email = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];
    $status = "inactive";
    $newUser = new User();
    $newUser->fname = strtolower($fname);
    $newUser->userid = $userid;
    $newUser->email = strtolower($email);
    $newUser->password = $password;
    $newUser->status = $status;
    if(isset($_FILES['signupAvatar'])) {
        if (!empty($_FILES['signupAvatar']['name'])) {
            $extension = pathinfo("../images/profile/".basename($_FILES['signupAvatar']['name']), PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES['signupAvatar']['tmp_name'], "../images/profile/" . "profile". $userid .".". $extension)) {
                $newUser->profilepicture = "images/profile/" . "profile". $userid .".". $extension;
            }
        }
    }
    if($newUser->save()){
        header('location: ../index.php?result=1');
    }else{
        header('location: ../index.php?result=2');
    }
}

/*class Signup{
    public $fname;
    public $lname;
    public $userid;
    public $email;
    public $phone;
    //public $profilepicture;
    public $password;

    public function insertUser(){

        $newUser = new User();
        $newUser = $newUser->save();
        $newUser ->$fname = $this->$fname;
        $newUser ->$lname = $this->$lname;
        $newUser ->$userid = $this->$userid;
        $newUser ->$email = $this->$email;
        $newUser ->$phone = $this->$phone;
        $newUser ->$password = $this->$password;
    }
}*/