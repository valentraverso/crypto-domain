<?php

require './DbConnection.php';

class Coins extends Connection{
    public function getCoins(){
        $query = $this->con->prepare('SELECT * FROM coins');
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addCoins(){

    }
}

$con = new Coins();

print_r($con->getCoins());