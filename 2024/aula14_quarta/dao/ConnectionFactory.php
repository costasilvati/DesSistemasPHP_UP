<?php
class ConnectionFactory{
    static $connection;

    public static function getConnection(){
        $host = "localhost";
        $dbname = "aulaphp";
        $userDb = "root";
        $pass = "";
        $port = "3306";
        try{
            $connection = new PDO("mysql:host=$host;dbname=$dbname;port=$port",$userDb, $pass);
            echo "Conectado";
        }catch(PDOException $ex){
            echo "Erro! ".$ex->getMessage();
        }
    }
}
?>