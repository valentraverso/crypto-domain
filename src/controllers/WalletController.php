<?php
require_once BASE_PATH.'/src/controllers/DbConnection.php';

class Wallet extends Connection {

    // Create
    public function createWallet($idWallet){
        $createQuery = $this->con->prepare("INSERT INTO `wallet` (`id_wallet`, `id_user`, `coin_obj`) VALUES (:idWallet, :idWallet,'')");
        $createQuery->bindParam(':idWallet', $idWallet);
        $createQuery->execute();
    }

    public function getWallet($extendQuery){
        $getQuery = $this->con->prepare("SELECT * FROM wallet $extendQuery");
        $getQuery->execute();
        $result = $getQuery->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

      // DELETE
      public function deleteWallet($idWallet){
        $deleteSqlQuery = $this->con->prepare("DELETE FROM wallet WHERE id_wallet=:idWallet");
        $deleteSqlQuery->bindParam(':idWallet', $idWallet);
        $deleteSqlQuery->execute();
    }
}

?>