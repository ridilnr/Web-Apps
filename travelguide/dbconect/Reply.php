<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/9/17
 * Time: 6:53 PM
 */
require_once "Connect.php";
class Reply
{
    public $commentid;
    public $replyid;
    public $userid;
    public $message;
    public $timet;
    public $dated;

    //get all reply from the data base
    public static function findAll()
    {
        $connect = Connect::GetConnection();
        $req = "SELECT * FROM reply";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Reply();
            $cat ->commentid = $o ->commentid;
            $cat ->replyid = $o ->replyid;
            $cat ->userid = $o ->userid;
            $cat ->message = $o->message;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
            $tab[] = $cat;
        }
        return $tab;
    }

    //get one reply from the data base
    public static function findThis($replyid)
    {
        $connect = Connect::GetConnection();
        $replyid = mysqli_real_escape_string($connect,$replyid);
        $req = "SELECT * FROM reply WHERE replyid = '$replyid'";
        $query = mysqli_query($connect, $req);
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Reply();
            $cat ->commentid = $o ->commentid;
            $cat ->replyid = $o ->replyid;
            $cat ->userid = $o ->userid;
            $cat ->message = $o->message;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
        }
        return $cat;
    }

    //get reply from the data base
    public static function find($commentid, $userid)
    {
        $connect = Connect::GetConnection();
        $commentid = mysqli_real_escape_string($connect,$commentid);
        $userid = mysqli_real_escape_string($connect,$userid);
        $req = "SELECT * FROM reply WHERE commentid LIKE '$commentid' AND userid LIKE '$userid'";
        $query = mysqli_query($connect, $req);
        $tab = array();
        while($o = mysqli_fetch_object($query))
        {
            $cat = new Reply();
            $cat ->commentid = $o ->commentid;
            $cat ->replyid = $o ->replyid;
            $cat ->userid = $o ->userid;
            $cat ->message = $o->message;
            $cat ->timet = $o ->timet;
            $cat ->dated = $o ->dated;
            $tab[] = $cat;
        }
        return $tab;
    }

    //save a new reply in the data base
    public function save()
    {
        $connect = Connect::GetConnection();
        $commentid = mysqli_real_escape_string($connect,$this->commentid);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $replyid = mysqli_real_escape_string($connect,$this->replyid);
        $dated = mysqli_real_escape_string($connect,$this->dated);
        $timet = mysqli_real_escape_string($connect,$this->timet);
        $message = mysqli_real_escape_string($connect,$this->message);
        $req = "INSERT INTO reply (commentid, userid, replyid, dated, timet, message) 
          VALUES ('$commentid','$userid', '$replyid', '$dated', '$timet', '$message')";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }

    //update data from a tuple in the reply table.
    public function update()
    {
        $connect = Connect::GetConnection();
        $commentid = mysqli_real_escape_string($connect,$this->commentid);
        $userid = mysqli_real_escape_string($connect,$this->userid);
        $replyid = mysqli_real_escape_string($connect,$this->replyid);
        $dated = mysqli_real_escape_string($connect,$this->dated);
        $timet = mysqli_real_escape_string($connect,$this->timet);
        $message = mysqli_real_escape_string($connect,$this->message);
        $req = "UPDATE reply SET userid = '$userid', commentid = '$commentid', dated = '$dated',
        timet = '$timet', message = '$message' WHERE replyid = '$replyid'";
        $query = mysqli_query($connect,$req);
        if ($query == true)
            return true ;
        else
            return false;
    }
}