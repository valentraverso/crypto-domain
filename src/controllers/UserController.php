<?php

// CRUD

require_once BASE_PATH.'/src/controllers/DbConnection.php';

class Users extends Connection{

    // Create
    public function createUser($idWallet, $email, $password, $firstName, $lastName, $birthDate, $favCoin, $status, $role){         
        $createQuery = $this->con->prepare("INSERT INTO users 
        (`id_user`, `id_wallet`, `email`, `password`, `first_name`, `last_name`, `birth_date`, `fav_coin`, `avatar`, `status`, `role`) 
        VALUES 
        (NULL, :idWallet, :email, :password, :firstName, :lastName, :birthDate, :favCoin, '', :status, :role)");
        $createQuery->bindParam(':idWallet', $idWallet);
        $createQuery->bindParam(':email', $email);
        $createQuery->bindParam(':password', $password);
        $createQuery->bindParam(':firstName', $firstName);
        $createQuery->bindParam(':lastName', $lastName);
        $createQuery->bindParam(':birthDate', $birthDate);
        $createQuery->bindParam(':favCoin', $favCoin);
        $createQuery->bindParam(':status', $status);
        $createQuery->bindParam(':role', $role);
        $createQuery->execute();
    } 
    // Read
    public function readUserData($queryExtend){
        $sqlQuery = $this->con->prepare("SELECT * FROM users $queryExtend");
        $sqlQuery->execute();
        $result = $sqlQuery->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Update
    public function updateUserData($idUser, $firstName, $lastName){

        $updateSqlQuery = $this->con->prepare("UPDATE users
        SET first_name=:firstName, last_name=:lastName
        WHERE id_user=:idUser");
        $updateSqlQuery->bindParam(':firstName', $firstName);
        $updateSqlQuery->bindParam(':lastName', $lastName);
        $updateSqlQuery->bindParam(':idUser', $idUser);
        $updateSqlQuery->execute();

    }
    
}

?>