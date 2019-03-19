<?php
require_once 'Connect.php';//needed for the connection.
class Admin
{
    public $email;
    public $password;


    //get all admins from the data base
    public static function findAll()
    {
        $connect = Connect::GetConnexion();
        $req = "SELECT * FROM admin";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Admin();
            $cat ->email = $o ->email;
            $cat ->password = $o ->password;
            $tab[] = $cat;
        }
        return $tab;
    }

    //get  admins from the data base
    public static function find($email, $password)
    {
        $connect = Connect::GetConnexion();
        $email = mysqli_real_escape_string($connect,$email);
        $password = mysqli_real_escape_string($connect,$password);
        $req = "SELECT * FROM admin WHERE email LIKE '$email' AND  password LIKE '$password'";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Admin();
            $cat ->email = $o ->email;
            $cat ->password = $o ->password;
            $tab[] = $cat;
        }
        return $tab;
    }

    //get one admin from the data base
    public static function findThis($email)
    {
        $connect = Connect::GetConnexion();
        $email = mysqli_real_escape_string($connect,$email);
        $req = "SELECT * FROM admin WHERE email = '$email'";
        $query = mysqli_query($connect, $req);
        $cat = new Admin();
        while($o = mysqli_fetch_object($query))
        {
            $cat ->email = $o ->email;
            $cat ->password = $o ->password;
        }
        return $cat;
    }

    //set a new pass or a new email word to an admin tuple
    public function update()
    {
        $connect = Connect::GetConnexion();
        $password = mysqli_real_escape_string($connect,$this->password);
        $email = mysqli_real_escape_string($connect,$this->email);
        $req = "UPDATE admin SET password = '$password', email = '$email' WHERE email = '$email'";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }

    //save a new admin the admin table
    public function save()
    {
        $connect = Connect::GetConnexion();
        $email = mysqli_real_escape_string($connect,$this->email);
        $password = mysqli_real_escape_string($connect,$this->password);
        $req = "INSERT INTO admin ( email, password) VALUES ('$email','$password')";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }

    public function delete(){
        $conn = Connect::GetConnexion();
        $email = mysqli_real_escape_string($conn,$this->email);
        $sql= " DELETE FROM  department WHERE email = '$email' ";
        $result= mysqli_query($conn, $sql);
        if ($result == true)
            return true ;
        else
            return false;
    }
}