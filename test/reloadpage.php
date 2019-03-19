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

echo countNumTuple()[0];

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