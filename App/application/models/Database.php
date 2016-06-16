<?php


class Database extends Model
{
	
	private static $dbName = 'financas' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
     
    private static $conexao  = null;
     
    public function __construct() {
        die('Impossível chamar função Init.');
    }
     
    public static function connect()
    {
       //Uma ligação através de todo o aplicativo
       if ( null == self::$connexao )
       {     
        try
        {
          self::$conexao =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$conexao;
    }
     
    public static function disconnect()
    {
        self::$conexao = null;
    }

}