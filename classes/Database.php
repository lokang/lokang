<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 12/4/18
 * Time: 11:24 PM
 */
class Database{
    private $databaseHost = 'localhost';
    private $databaseUser = 'lokang';
    private $databasePassword = 'laboni21';
    private $databaseName = 'lokang';

    public $connection;

    public function __construct(){
        $this->connect();
    }

    /**
     * @return mysqli
     * @var TYPE_NAME $this
     */

    private function connect(){
        $this->connection = new mysqli(
            $this->databaseHost,
            $this->databaseUser,
            $this->databasePassword,
            $this->databaseName
        );

        if($this->connection->connect_errno){
            die("Connection failed".$this->connection->connect_error);
        }
//        if (mysqli_connect_error()) {
//            echo "connection fail" . mysqli_connect_error();
//            exit();
//        } elseif (!mysqli_connect_error()) {
//            echo "success!";
//            exit();
//        }
        return $this->connection;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function query($sql){
        $result = $this->connection->query($sql);
        $this->queryConfirm();
        return $result;
    }

    /**
     * @param $result
     */
    public function queryConfirm($result){
        if(!$result){
            die("query failed".$this->connection->error);
        }
    }

    /**
     * @param $string
     * @return mixed
     */
    public function dbEscape($connection, $string) {
        return mysqli_real_escape_string($connection, $string);
    }

    /**
     * @return mixed
     */
    public function insertId(){
        return $this->connection->insert_id;
    }

    function disconnect($connection)
    {
        if (isset($connection)) {
            $connection->close();
        }
    }
}

$database = new Database();
//echo $database->connect();

