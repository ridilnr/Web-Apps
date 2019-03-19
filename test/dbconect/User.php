<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/9/17
 * Time: 1:50 PM
 */
require_once "Connect.php";
session_start();
class User
{
    public $fname;
    public $lname;
    public $userid;
    public $email;
    public $phone;
    public $profilepicture;
    public $password;
    public $status;

    //get all user from the data base
    public static function findAll()
    {
        $connect = Connect::GetConnection();
        $req = "SELECT * FROM user";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new User();
            $cat ->fname = $o ->fname;
            $cat ->lname = $o ->lname;
            $cat ->userid = $o ->userid;
            $cat ->email = $o->email;
            $cat ->phone = $o ->phone;
            $cat ->profilepicture = $o ->profilepicture;
            $cat ->password = $o ->password;
            $cat ->status = $o ->status;
            $tab[] = $cat;
        }
        return $tab;
    }

    //get one user from the data base
    public static function findThis($userid)
    {
        $connect = Connect::GetConnection();
        $userid = mysqli_real_escape_string($connect,$userid);
        $req = "SELECT * FROM user WHERE userid = '$userid'";
        $query = mysqli_query($connect, $req);
        while($o = mysqli_fetch_object($query))
        {
            $cat = new User();
            $cat ->fname = $o ->fname;
            $cat ->lname = $o ->lname;
            $cat ->userid = $o ->userid;
            $cat ->email = $o->email;
            $cat ->phone = $o ->phone;
            $cat ->profilepicture = $o ->profilepicture;
            $cat ->password = $o ->password;
            $cat ->status = $o ->status;
        }
        return $cat;
    }

    //get user from the data base
    public static function find($fname, $email, $password)
    {
        $connect = Connect::GetConnection();
        $fname = mysqli_real_escape_string($connect,$fname);
        $email = mysqli_real_escape_string($connect,$email);
        $password = mysqli_real_escape_string($connect,$password);
        $req = "SELECT * FROM user WHERE fname LIKE '$fname' AND email LIKE '$email' AND password LIKE '$password'";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new User();
            $cat ->fname = $o ->fname;
            $cat ->lname = $o ->lname;
            $cat ->userid = $o ->userid;
            $cat ->email = $o->email;
            $cat ->phone = $o ->phone;
            $cat ->profilepicture = $o ->profilepicture;
            $cat ->password = $o ->password;
            $cat ->status = $o ->status;
            $tab[] = $cat;
        }
        return $tab;
    }

    //save a new user in the data base
    public function save()
    {
        $connect = Connect::GetConnection();
        $fname = mysqli_real_escape_string($connect,$this->fname);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $email = mysqli_real_escape_string($connect,$this->email);
        $password = mysqli_real_escape_string($connect,$this->password);
        $status = mysqli_real_escape_string($connect,$this->status);
        $req = "INSERT INTO user (fname,userid, email, password, status) 
          VALUES ('$fname', '$userid', '$email', '$password', '$status')";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }

    //update data from a tuple in the user table.
    public function update()
    {
        $connect = Connect::GetConnection();
        $fname = mysqli_real_escape_string($connect,$this->fname);
        $lname = mysqli_real_escape_string($connect,$this->lname);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $email = mysqli_real_escape_string($connect,$this->email);
        $password = mysqli_real_escape_string($connect,$this->password);
        $profilepicture = mysqli_real_escape_string($connect,$this->profilepicture);
        $phone = mysqli_real_escape_string($connect,$this->phone);
        $status = mysqli_real_escape_string($connect,$this->status);
        $req = "UPDATE user SET fname = '$fname', lname = '$lname', profilepicture = '$profilepicture',
        email = '$email', password = '$password', status = '$status', phone ='$phone' WHERE userid = '$userid'";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }
}