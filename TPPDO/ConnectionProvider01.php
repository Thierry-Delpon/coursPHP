<?php


class ConnectionProvider01
{
    private static $pdo;
    public static function getConnection(){
        try {


            $dns = "sqlite:./BdD.sqlite";
            static::$pdo = new PDO($dns);

        }catch (PDOException $e) {
            echo $e->getMessage();
        }
        return static::$pdo;
    }
}