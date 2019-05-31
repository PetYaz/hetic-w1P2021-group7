<?php

namespace Model;

class Database{

  private const HOST = "localhost";
  private const NAME = "Penpal";
  private const USER = "root";
  private const PASS = "";
  public static $pdo;
    
    public static function connect(){
        try{
            self::$pdo = new \PDO(
                "mysql:host=" . self::HOST . ";dbname=" . self::NAME,
                self::USER,
                self::PASS,
                [
                    \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_WARNING,
                ]
            );
        } catch(\PDOExeption $e){
            die($e->getMessage());
        }
    }
    
}
