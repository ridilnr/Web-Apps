<?php

	 function check()
	{
		$rp= new Reply();
		$cm= new Comment();
		$pl= new Place();

		$rp->findAll();
		$cm->findAll();
		$pl->findAll();

		$countReply=0;
		$countComment=0;
		$countPlace=0;	
		foreach ($rp as $rpy) {
			$countReply++;
		}
		foreach ($rp as $rpy) {
			$countComment++;
		}
		foreach ($rp as $rpy) {
			$countPlace++;
		}
		$_SESSION["newReply"]=  $countReply;
		$_SESSION["newComment"]= $countComment;
		$_SESSION["newPlace"]=   $countPlace;
	}

   function reload()
  {
        if ($countReply< $_SESSION["newReply"] or $countComment< $_SESSION["newComment"] or $countPlace < $_SESSION["newPlace"] ) {
             header('Location: realapp.php');
             die();
        }
  }

  check();
  reload();







<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 05/01/2018
 * Time: 00:32
 */
require_once "dbconect/Comment.php";
require_once "dbconect/Place.php";
require_once "dbconect/Reply.php";

checkDatabase();

function countNumTuple(){
    $newComment = Comment::findAll();
    $newPlace = Place::findAll();
    $newReply = Reply::findAll();
    $countComment = count($newComment);
    $countPlace = count($newPlace);
    $countReply = count($newReply);
    $arrayNumTuple = [$countComment, $countPlace, $countReply];
    return $arrayNumTuple;
}

function checkDatabase(){
    $getArrayNumTuple = countNumTuple();
    //print_r($getArrayNumTuple[0]);
    $_SESSION["numComment"] = $getArrayNumTuple[0];
    $_SESSION["numPlace"] = $getArrayNumTuple[1];
    $_SESSION["numReply"] = $getArrayNumTuple[2];
}

function compareSessionDatabase(){
    $getArrayNumTuple = countNumTuple();
    /*echo $_SESSION["numComment"]."<br>".$_SESSION["numPlace"]."<br>".$_SESSION["numComment"]."<br>";
    echo $getArrayNumTuple[0]."<br>".$getArrayNumTuple[1]."<br>".$getArrayNumTuple[2];*/
    if(($getArrayNumTuple[0] > $_SESSION["numComment"]) or ($getArrayNumTuple[1] > $_SESSION["numPlace"]) or ($getArrayNumTuple[2] > $_SESSION["numReply"])){
        $_SESSION["numComment"] = $getArrayNumTuple[0];
        $_SESSION["numPlace"] = $getArrayNumTuple[1];
        $_SESSION["numReply"] = $getArrayNumTuple[2];
        echo "<script>alert('Yesssssssssss');</script>";
    }
    compareSessionDatabase();
    sleep(5);
}

compareSessionDatabase();

/*while (1){
    // flush the output buffer and send echoed messages to the browser
    while (ob_get_level() > 0) {
        ob_end_flush();
    }
    flush();
    // sleep for 1 second before running the loop again
    sleep(5);
}*/

