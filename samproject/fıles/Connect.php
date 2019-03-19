<?php
class Connect
{
    //propriete(s)
    private static $ressource;
    //methode(s)
    public static function GetConnexion()
    {
        if(self::$ressource==null)
        {
            self::$ressource = mysqli_connect("localhost","root","","mishovau");
            //mysqli_select_db("myproject");
            return self::$ressource;
        }
        else
        {
            return self::$ressource;
        }
    }
}