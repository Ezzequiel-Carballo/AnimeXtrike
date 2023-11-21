<?php 

class Database{

    public static function conexion(){
        $db = new mysqli('localhost','root','','anime_Xtrike');
        $db -> query("SET NAMES 'uft-8'");

        return $db;
    }
}