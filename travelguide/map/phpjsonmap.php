<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/10/17
 * Time: 2:49 PM
 */
session_start();
require_once("../dbconect/Place.php");
require_once("../dbconect/Comment.php");
$find = Place::findthis($_SESSION["placeid"]);

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}
// Start XML file, create parent node

header("Content-type: text/xml");
// Start XML file, echo parent node
echo '<markers>';
// Iterate through the rows, adding XML nodes for each
    // Add to XML document node
    echo '<marker ';

    echo 'id="' . parseToXML($find->placeid).'" ';
    echo 'name="' . parseToXML($find->pname).'" ';
    echo 'description="' . parseToXML($find->description).'" ';
    echo 'lat="'. $find->latitude.'" ';
    echo 'lng="'. $find->longitude.'"';
    echo '/>';


// End XML file
echo '</markers>';


