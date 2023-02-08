<?php

$base = new PDO("mysql:host=127.0.0.1; dbname=cryptodomaindb", "root", "");

try {
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $stmt = $base->query('SELECT * FROM coins');
    $data = $stmt->fetchAll();
 
    foreach ($data as $row) {
        echo $row['id_coin'] . '<br>';
    }
 
 } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
 }