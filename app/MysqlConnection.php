<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 03.06.2020
 * Time: 23:20
 */

namespace App;

use PDO;

class MysqlConnection
{
    private static $connection;

    public static function getConnection(){
        if (!self::$connection) self::$connection = new PDO('mysql:dbname=kda_hmc; host=localhost','root','keep');
        return (self::$connection);
    }
}