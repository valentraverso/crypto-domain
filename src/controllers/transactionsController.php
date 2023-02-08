<?php
require_once BASE_PATH.'/src/controllers/DbConnection.php';

class Transaction extends Connection {
    // Create
    public function createTransaction($idWalletSend, $idWalletRec, $idCoin, $coinQ, $cotization){         
        $createQuery = $this->con->prepare("INSERT INTO transactions 
        (`id_trans`, `id_wallet_send`, `id_wallet_recieve`, `id_coin`, `coin_q`, `cotization`) 
        VALUES 
        (NULL, :idWalletSend, :idWalletRec, :idCoin, :coinQ, :cotization)");
        $createQuery->bindParam(':idWalletSend', $idWalletSend);
        $createQuery->bindParam(':idWalletRec', $idWalletRec);
        $createQuery->bindParam(':idCoin', $idCoin);
        $createQuery->bindParam(':coinQ', $coinQ);
        $createQuery->bindParam(':cotization', $cotization);
        $createQuery->execute();
    } 

}

?>