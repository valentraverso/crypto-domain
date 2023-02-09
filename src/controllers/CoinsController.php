<?php
require 'C:\xampp\htdocs\PHP-final\develop-your-project-in-php\src\controllers\DbConnection.php';
class Coin extends Connection{

    public function getCoins(){
        $query = $this->con->prepare('SELECT * FROM coins');
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function createTransaction($id_wallet_send, $id_wallet_recieve, $id_coin, $coin_q, $cotization){
        $query = "INSERT INTO transactions (`id_trans`, `id_wallet_send`, `id_wallet_recieve`, `id_coin`, `coin_q`, `cotization`)
                  VALUES (NULL, :id_wallet_send, :id_wallet_recieve, :id_coin, :coin_q, :cotization)";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(':id_wallet_send', $id_wallet_send);
        $stmt->bindParam(':id_wallet_recieve', $id_wallet_recieve);
        $stmt->bindParam(':id_coin', $id_coin);
        $stmt->bindParam(':coin_q', $coin_q);
        $stmt->bindParam(':cotization', $cotization);
        $stmt->execute();
    }
}
