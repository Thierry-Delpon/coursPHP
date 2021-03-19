<?php


class ConnectionProvider
{

     private static $pdo;
     public static function getConnection(){
         try {


           $dns = "sqlite:./bdd.sqlite";
           static::$pdo = new PDO($dns);

       }catch (PDOException $e) {
           echo "nex Exception";
       }
       return static::$pdo;
   }
}