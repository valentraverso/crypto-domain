<?php

require_once './DbConnection.php'; 

class Users extends Connection{
    // Create
    private function createUser($idWallet, $email, $password, $firstName, $lastName, $birthDate, $favCoin, $avatar, $status, $role){
        $createQuery = $this->con->prepare("INSERT INTO `users` 
        (`id_user`, `id_wallet`, `email`, `password`, `first_name`, `last_name`, `birth_date`, `fav_coin`, `avatar`, `status`, `role`) 
        VALUES 
        (NULL, ':idWallet', ':email', ':password', ':firstName', ':lastName', ':birthDate', ':favCoin', ':avatar', ':status', ':role')");
        $createQuery->bindParam(':idWallet', $idWallet);
        $createQuery->bindParam(':email', $email);
        $createQuery->bindParam(':password', $password);
        $createQuery->bindParam(':firstName', $firstName);
        $createQuery->bindParam(':lastName', $lastName);
        $createQuery->bindParam(':birthDate', $birthDate);
        $createQuery->bindParam(':favCoin', $favCoin);
        $createQuery->bindParam(':avatar', $avatar);
        $createQuery->bindParam(':status', $status);
        $createQuery->bindParam(':role', $role);
        $createQuery->execute();
    }
    
}

?>