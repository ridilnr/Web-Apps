<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/9/17
 * Time: 10:32 PM
 */
session_start();
require_once "../dbconect/Place.php";

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characterLength = strlen($characters);
    $randomString = '';
    for($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $characterLength - 1)];
    }
    return $randomString;
}

$name = $_GET['name'];
$description = $_GET['description'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$mess = $_GET['message'];

$place = new Place();
$place->pname = $name;
$place->latitude = $lat;
$place->longitude = $lng;
$place->description = $description;
$place->userid = $_SESSION['iduser'];
$place->dated = date('Y-m-d ');
$place->timet = date('H:i:s');

$place->placeid = "pl".generateRandomString();

$place->save();
//header("Location: ../realapp.php");


