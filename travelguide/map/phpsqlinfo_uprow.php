<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/9/17
 * Time: 10:32 PM
 */
session_start();
require_once "../dbconect/Place.php";

$name = $_GET['name'];
$description = $_GET['description'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];

if(isset($_SESSION['placeid'])){

    $place = Place::findThis($_SESSION['placeid']);
    $place->pname = $name;
    $place->latitude = $lat;
    $place->longitude = $lng;
    $place->description = $description;
    $place->userid = $_SESSION['iduser'];
    $place->dated = date('Y-m-d ');
    $place->timet = date('H:i:s');

    $place->update();
        //header("Location: ../realapp.php");
}
