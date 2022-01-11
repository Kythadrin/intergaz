<?php

namespace Intergaz\Data;

use PDO;
use PDOException;

class Database
{
    public static function connect()
    {
        $db = parse_ini_file(ROOT . "/conf/database.ini");

        try {
            $dsn = 'sqlsrv:Server=(' . $db['host'] . ');Database=' . $db['database'];
            $connection = new PDO($dsn, $db['user'], $db['password']);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            print $e->getMessage();
        }
       
        return $connection;
    }
}