<?php
require_once BASE_PATH.'/src/controllers/DbConnection.php';

class Wallet extends Connection {

    // CREATE
    public function createWallet($idWallet){
        $createQuery = $this->con->prepare("INSERT INTO `wallet` (`id_wallet`, `id_user`, `coin_obj`) VALUES (:idWallet, :idWallet,'{\"EUR\": 0, \"BTC\": 0, \"ETH\": 0, \"LUN\": 0, \"DOGE\": 0}')");
        $createQuery->bindParam(':idWallet', $idWallet);
        $createQuery->execute();
    }

    // READ
    public function getWallet($extendQuery){
        $getQuery = $this->con->prepare("SELECT * FROM wallet $extendQuery");
        $getQuery->execute();
        $result = $getQuery->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function updateWallet($actualWallet, $coin, $qCoin, $idWallet){
        $properWallet = str_replace('"', '\"', $actualWallet);
        $updateWalletQuery = $this->con->prepare("UPDATE wallet SET json_coins = JSON_REPLACE('$properWallet', :coin, $qCoin) WHERE id_wallet = :idWallet");
        $updateWalletQuery->bindParam(':coin', $coin);
        $updateWalletQuery->bindParam(':idWallet', $idWallet);
        $updateWalletQuery->execute();
    }

    // DELETE
    public function deleteWallet($idWallet){
        $deleteSqlQuery = $this->con->prepare("DELETE FROM wallet WHERE id_wallet=:idWallet");
        $deleteSqlQuery->bindParam(':idWallet', $idWallet);
        $deleteSqlQuery->execute();
    }
}

?>