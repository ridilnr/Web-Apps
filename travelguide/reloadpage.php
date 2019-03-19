<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 05/01/2018
 * Time: 00:32
 */
require "dbconect/Comment.php";
require "dbconect/Place.php";
require "dbconect/Reply.php";
require "dbconect/Image.php";

//checkDatabase();

echo json_encode(countNumTuple());

function countNumTuple(){
    $newComment = Comment::findAll();
    $newPlace = Place::findAll();
    $newReply = Reply::findAll();
    $newImage = Image::findAll();
    $countComment = count($newComment);
    $countPlace = count($newPlace);
    $countReply = count($newReply);
    $newImage = count($newImage);
    $arrayNumTuple = [$countComment, $countPlace, $countReply, $newImage];
    return $arrayNumTuple;
}