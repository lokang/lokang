<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 17/4/18
 * Time: 11:11 PM
 */
include ("Database.php");

class User{

    public $table = 'user';
    public $db;

    public function __construct(){
        $this->db = new Database();
    }

    /**
     * @return mixed
     */
    public function getAllUsers(){
        global $database;
        $sql = "SELECT * FROM user";
        $result = $database->query($sql);
        return $result;
    }

    public function findUserById($userId){
        global $database;
        $sql = "SELECT * FROM user WHERE id = $userId LIMIT 1";
        $result = $database->query($sql);
        $found = mysqli_fetch_array($result);
        return $found;
    }

    public function userQuery($sql){
        global $database;
        $result = $database->query($sql);
        return $result;
    }
}

//$user = new User();
//echo $user->getAllUsers();
