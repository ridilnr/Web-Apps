<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/9/17
 * Time: 7:23 PM
 */
require_once "Connect.php";
class Place
{
    public $placeid;
    public $pname;
    public $longitude;
    public $latitude;
    public $description;
    public $userid;
    public $timet;
    public $dated;

    //get all place from the data base
    public static function findAll()
    {
        $connect = Connect::GetConnection();
        $req = "SELECT * FROM place";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Place();
            $cat ->placeid = $o ->placeid;
            $cat ->pname = $o ->pname;
            $cat ->longitude = $o ->longitude;
            $cat ->latitude = $o->latitude;
            $cat ->description = $o ->description;
            $cat ->userid = $o ->userid;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
            $tab[] = $cat;
        }
        return $tab;
    }

    //get one place from the data base
    public static function findThis($placeid)
    {
        $connect = Connect::GetConnection();
        $placeid = mysqli_real_escape_string($connect,$placeid);
        $req = "SELECT * FROM place WHERE placeid = '$placeid'";
        $query = mysqli_query($connect, $req);
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Place();
            $cat ->placeid = $o ->placeid;
            $cat ->pname = $o ->pname;
            $cat ->longitude = $o ->longitude;
            $cat ->latitude = $o->latitude;
            $cat ->description = $o ->description;
            $cat ->userid = $o ->userid;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
        }
        return $cat;
    }

    //get place from the data base
    public static function find($longitude, $latitude, $userid)
    {
        $connect = Connect::GetConnection();
        $userid = mysqli_real_escape_string($connect,$userid);
        $req = "SELECT * FROM place WHERE longitude LIKE '$longitude' AND latitude LIKE '$latitude' AND userid LIKE '$userid'";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Place();
            $cat ->placeid = $o ->placeid;
            $cat ->pname = $o ->pname;
            $cat ->longitude = $o ->longitude;
            $cat ->latitude = $o->latitude;
            $cat ->description = $o ->description;
            $cat ->userid = $o ->userid;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
            $tab[] = $cat;
        }
        return $tab;
    }

    //save a new place in the data base
    public function save()
    {
        $connect = Connect::GetConnection();
        $placeid = mysqli_real_escape_string($connect,$this->placeid);
        $pname = mysqli_real_escape_string($connect,$this->pname);
        $description = mysqli_real_escape_string($connect,$this->description);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $dated = mysqli_real_escape_string($connect,$this->dated);
        $timet = mysqli_real_escape_string($connect,$this->timet);
        $req = "INSERT INTO place (placeid, pname, longitude, latitude, description, userid, timet, dated) 
          VALUES ('$placeid','$pname', '$this->longitude', '$this->latitude', '$description', '$userid', '$timet', '$dated')";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }

    //update data from a tuple in the place table.
    public function update()
    {
        $connect = Connect::GetConnection();
        $placeid = mysqli_real_escape_string($connect,$this->placeid);
        $pname = mysqli_real_escape_string($connect,$this->pname);
        $description = mysqli_real_escape_string($connect,$this->description);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $dated = mysqli_real_escape_string($connect,$this->dated);
        $timet = mysqli_real_escape_string($connect,$this->timet);
        $req = "UPDATE place SET pname = '$pname', description = '$description', longitude = '$this->longitude',
        latitude = '$this->latitude', userid = '$userid', timet='$timet', dated='$dated' WHERE placeid = '$placeid'";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }
}