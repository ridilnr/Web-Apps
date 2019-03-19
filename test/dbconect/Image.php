<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/9/17
 * Time: 7:48 PM
 */
require_once "Connect.php";
class Image
{
    public $placeid;
    public $imageid;
    public $path;
    public $description;

    //get all image from the data base
    public static function findAll()
    {
        $connect = Connect::GetConnection();
        $req = "SELECT * FROM image";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Image();
            $cat ->placeid = $o ->placeid;
            $cat ->imageid = $o ->imageid;
            $cat ->path = $o ->path;
            $cat ->description = $o ->description;
            $tab[] = $cat;
        }
        return $tab;
    }

    //get one image from the data base
    public static function findThis($imageid)
    {
        $connect = Connect::GetConnection();
        $imageid = mysqli_real_escape_string($connect,$imageid);
        $req = "SELECT * FROM image WHERE imageid = '$imageid'";
        $query = mysqli_query($connect, $req);
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Image();
            $cat ->placeid = $o ->placeid;
            $cat ->imageid = $o ->imageid;
            $cat ->path = $o ->path;
            $cat ->description = $o ->description;
        }
        return $cat;
    }

    //get image from the data base
    public static function find($placeid)
    {
        $connect = Connect::GetConnection();
        $placeid = mysqli_real_escape_string($connect,$placeid);
        $req = "SELECT * FROM image WHERE placeid LIKE '$placeid'";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Image();
            $cat ->placeid = $o ->placeid;
            $cat ->imageid = $o ->imageid;
            $cat ->path = $o ->path;
            $cat ->description = $o ->description;
            $tab[] = $cat;
        }
        return $tab;
    }

    //save a new image in the data base
    public function save()
    {
        $connect = Connect::GetConnection();
        $placeid = mysqli_real_escape_string($connect,$this->placeid);
        $imageid = mysqli_real_escape_string($connect,$this->imageid);
        $description = mysqli_real_escape_string($connect,$this->description);
        $path = mysqli_real_escape_string($connect,$this->path);
        $req = "INSERT INTO image (placeid, imageid, path, description) 
          VALUES ('$placeid','$imageid', '$path', '$description')";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }

    //update data from a tuple in the image table.
    public function update()
    {
        $connect = Connect::GetConnection();
        $placeid = mysqli_real_escape_string($connect,$this->placeid);
        $imageid = mysqli_real_escape_string($connect,$this->imageid);
        $description = mysqli_real_escape_string($connect,$this->description);
        $path = mysqli_real_escape_string($connect,$this->path);
        $req = "UPDATE image SET placeid = '$placeid', description = '$description', path = '$path' WHERE imageid = '$imageid'";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }
}