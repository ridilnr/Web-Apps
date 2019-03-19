<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/9/17
 * Time: 4:47 PM
 */
require_once "Connect.php";
class Comment
{
    public $commentid;
    public $placeid;
    public $userid;
    public $message;
    public $timet;
    public $dated;

    //get all comment from the data base
    public static function findAll()
    {
        $connect = Connect::GetConnection();
        $req = "SELECT * FROM comment";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Comment();
            $cat ->commentid = $o ->commentid;
            $cat ->placeid = $o ->placeid;
            $cat ->userid = $o ->userid;
            $cat ->message = $o->message;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
            $tab[] = $cat;
        }
        return $tab;
    }

    //get one comment from the data base
    public static function findThis($commentid)
    {
        $connect = Connect::GetConnection();
        $commentid = mysqli_real_escape_string($connect,$commentid);
        $req = "SELECT * FROM comment WHERE commentid = '$commentid'";
        $query = mysqli_query($connect, $req);
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Comment();
            $cat ->commentid = $o ->commentid;
            $cat ->placeid = $o ->placeid;
            $cat ->userid = $o ->userid;
            $cat ->message = $o->message;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
        }
        return $cat;
    }

    //get comment from the data base
    public static function find($placeid, $userid)
    {
        $connect = Connect::GetConnection();
        $placeid = mysqli_real_escape_string($connect,$placeid);
        $userid = mysqli_real_escape_string($connect,$userid);
        $req = "SELECT * FROM comment WHERE placeid LIKE '$placeid' AND userid LIKE '$userid'";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Comment();
            $cat ->commentid = $o ->commentid;
            $cat ->placeid = $o ->placeid;
            $cat ->userid = $o ->userid;
            $cat ->message = $o->message;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
            $tab[] = $cat;
        }
        return $tab;
    }

    //save a new comment in the data base
    public function save()
    {
        $connect = Connect::GetConnection();
        $commentid = mysqli_real_escape_string($connect,$this->commentid);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $placeid = mysqli_real_escape_string($connect,$this->placeid);
        $dated = mysqli_real_escape_string($connect,$this->dated);
        $timet = mysqli_real_escape_string($connect,$this->timet);
        $message = mysqli_real_escape_string($connect,$this->message);
        $req = "INSERT INTO comment (commentid, userid, placeid, dated, timet, message) 
          VALUES ('$commentid','$userid', '$placeid', '$dated', '$timet', '$message')";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }

    //update data from a tuple in the comment table.
    public function update()
    {
        $connect = Connect::GetConnection();
        $commentid = mysqli_real_escape_string($connect,$this->commentid);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $placeid = mysqli_real_escape_string($connect,$this->placeid);
        $dated = mysqli_real_escape_string($connect,$this->dated);
        $timet = mysqli_real_escape_string($connect,$this->timet);
        $message = mysqli_real_escape_string($connect,$this->message);
        $req = "UPDATE comment SET userid = '$userid', placeid = '$placeid', dated = '$dated',
        timet = '$timet', message = '$message' WHERE commentid = '$commentid'";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }
}