<?php
require_once "dbconect/Comment.php";
require_once "dbconect/Reply.php";
require_once "dbconect/Image.php";
require_once "dbconect/Place.php";

function generateRandomString($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';
		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}

function addfiles() {
    $img = new Image();
    $time = date('H:i:s');
    $date = date('Y-m-d ');
    $placeid = $_SESSION['placeid'];
    $userid = $_SESSION['iduser'];
    if (isset($_FILES['files'])) {
        if (!empty($_FILES['files']['name'])) {
            foreach ($_FILES['files']['name'] as $f => $name) {
                $imgid = "img" . generateRandomString();
                if ($_FILES['files']['error'][$f] == 4) {
                    continue;
                }
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                if (move_uploaded_file($_FILES['files']['tmp_name'][$f], "images/mapimg" . $imgid .".". $extension)) {
                    $img->imageid = $imgid;
                    $img->placeid = $placeid;
                    $img->userid = $userid;
                    $img->path = "images/mapimg" . $imgid .".". $extension;
                    $img->description = "Post the: " . $date . " at: " . $time;
                    $img->save();
                }
            }
        }
    }
    unset($_FILES['files']);
}

function updatepost(){
	if (isset($_POST['update'])){
	    if(!empty($_POST['editDescription'])) {
            $plc = Place::findThis($_SESSION['placeid']);
            $desc = $_POST['editDescription'];

            $plc->description = $desc;

            $plc->update();
        }

        addfiles();

	    unset($_POST['update']);
        //header("Location: realapp.php") ;
    }
}

function setComments() {
    if(isset($_POST['cmtsub'])) {
        if (!empty($_POST['message'])) {
            $commentid = "cm" . generateRandomString();
            $time = date('H:i:s');
            $date = date('Y-m-d ');
            $message = $_POST['message'];
            $userid = $_SESSION['iduser'];
            $placeid = $_SESSION['placeid'];

            $cmt = new Comment();

            $cmt->dated = $date;
            $cmt->timet = $time;
            $cmt->message = $message;
            $cmt->userid = $userid;
            $cmt->placeid = $placeid;
            $cmt->commentid = $commentid;

            $cmt->save();
        }

        addfiles();

        unset($_POST['cmtsub']);
        unset($_SESSION['placeid']);
        header("Location: realapp.php");
    }
}

function setReplys($rp) {
    if(!empty($rp)) {
        $commentid = "cm" . generateRandomString();
        $time = date('H:i:s');
        $date = date('Y-m-d ');
        $message = $rp;
        $userid = $_SESSION['iduser'];
        $placeid = $_SESSION['placeid'];

        $cmt = new Comment();

        $cmt->dated = $date;
        $cmt->timet = $time;
        $cmt->message = $message;
        $cmt->userid = $userid;
        $cmt->placeid = $placeid;
        $cmt->commentid = $commentid;

        $cmt->save();

        unset($_POST['commentpl']);
        //header("Location: realapp.php") ;
    }
}

function setchildReplys() {
	if (isset($_POST['replySubmit'])){
	    if(!empty($_POST['replycom'])) {
            $replyid = generateRandomString();
            $userid = $_SESSION['iduser'];
            $time = date('H:i:s');
            $date = date('Y-m-d ');
            $reply = $_POST['replycom'];
            $commentid = $_POST['commid'];

            $rep = new Reply();

            $rep->timet = $time;
            $rep->replyid = $replyid;
            $rep->commentid = $commentid;
            $rep->dated = $date;
            $rep->userid = $userid;
            $rep->message = $reply;

            $rep->save();

            unset($_POST['replySubmit']);
            //header("Location: realapp.php") ;
        }
	}
}

function deletePost(){
    $placeid = $_POST['deletePost'];
    $Plc = Place::findThis($placeid);
    $comm = Comment::find($placeid,"%");
    $img = Image::find($placeid);

    if(!empty($comm))
        foreach ($comm as $com)
        {
            $rep = Reply::find($com->commentid,"%");
            if(!empty($rep))
                foreach ($rep as $item)
                    $item->delete();
            $com->delete();
        }
    if(!empty($img))
        foreach ($img as $value)
            $value->delete();

    $Plc->delete();
    unset($_POST['deletePost']);
}

function deleteComment()
{
    $commentid = $_POST['deleteComment'];
    $comm = Comment::findThis($commentid);
    $rep = Reply::find($commentid,"%");

    if(!empty($rep))
        foreach ($rep as $rp)
            $rp->delete();

    $comm->delete();
    unset($_POST['deleteComment']);
}

function deleteReply()
{
    $replyid = $_POST['deleteReply'];
    $rep = Reply::findThis($replyid);
    $rep->delete();
    unset($_POST['deleteReply']);
}

function deleteImage()
{
    $imageid = $_POST['deleteImage'];
    $img= Image::findThis($imageid);
    $img->delete();
    unset($_POST['deleteImage']);
}
      








