<?php

class Database
{
    public static function connect()
    {
        try {
            $connection = new PDO('sqlsrv:server=(' . DB_HOST . ');database=' . DB_NAME, DB_USER, DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
       
        return $connection;
    }
}