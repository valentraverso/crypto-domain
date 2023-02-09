<?php
require_once BASE_PATH.'/src/controllers/DbConnection.php';
class Admin extends Connection{
    public function getAllUsers(){
        $userArray = array();
        $queryUsers = $this->con->prepare('SELECT * FROM users');
        $queryUsers->execute();
        
        while($user = $queryUsers->fetch(PDO::FETCH_ASSOC)){
            $userArray[] = $user;
        }
        return $userArray;
    }
}