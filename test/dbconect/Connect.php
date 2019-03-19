<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/8/17
 * Time: 3:18 PM
 */

class Connect
{
    //propriete(s)
    private static $ressource;
    //methode(s)
    public static function GetConnection()
    {
        if(self::$ressource==null)
        {
            self::$ressource = mysqli_connect("localhost","root","","travelguide");
            //mysqli_select_db("myproject");
            return self::$ressource;
        }
        else
        {
            return self::$ressource;
        }
    }
}