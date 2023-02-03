<?php

require_once '../controllers/DbConnection.php';

class Wallet extends Connection {

    // Create
    public function createWallet($idWallet){

        $createQuery = $this->con->prepare("INSERT INTO `wallet` (`id_wallet`, `id_user`, `coin_obj`) VALUES (:idWallet, :idWallet,'')");
        $createQuery->bindParam(':idWallet', $idWallet);
        $createQuery->execute();

    }




}



















?>