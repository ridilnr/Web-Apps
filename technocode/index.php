<?php
/**
 * Created by PhpStorm.
 * User: RIDI
 * Date: 17/03/2018
 * Time: 20:08
 */
try {
    $dbh = new PDO('mysql:host=localhost;dbname=technocode', 'root', '');
    foreach($dbh->query('SELECT * from module') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
