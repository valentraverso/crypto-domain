<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

//  $base = new PDO('mysql:host=localhost; dbname=cryptodomaindb', 'root', '');

// $sql = "SELECT id_user, id_wallet, email FROM users WHERE first_name = ?";


// $resultado = $base->prepare($sql);

// $resultado->execute(array("Ruben"));

// while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

//     echo ("id_user: " . $registro['id_user'] . "id_wallet: " . $registro['id_wallet'] . "email: " . $registro['email']); 
// }

// $resultado->closeCursor();


// $idUser = $_POST["id_user"];
// $idWallet = $_POST["id_wallet"];
// $email = $_POST["email"];
// $pass = $_POST["password"];
// $firstName = $_POST["first_name"];
// $lastName = $_POST["last_name"];
// $birthday = $_POST["birth_date"];
// $favCoin = $_POST["fav_coin"];
// $avatar = $_POST["avatar"];
// $status = $_POST["status"];
// $role = $_POST["role"];


// $idUser = null;
// $idWallet = 4;
// $email = "pepito@gmail.com";
// $pass = "123456";
// $firstName = "Pepito";
// $lastName = "Zafra";
// $birthday = "1980-02-02";
// $favCoin = 3;
// $avatar = "asdfasdfawfsfasdad";
// $status = 2;
// $role = 0;

// $sql = "INSERT INTO users (id_user, id_wallet, email, password, first_name, last_name, birth_date, fav_coin, avatar, status, role) VALUES (:user, :wallet, :email, :password, :first, :last, :birth, :coin, :avatar, :status, :role)";
// $resultado = $base->prepare($sql);

// $resultado->execute(array(":user"=>$idUser, ":wallet"=>$idWallet, ":email"=>$email, ":password"=>$pass, ":first"=>$firstName, ":last"=>$lastName, ":birth"=>$birthday, ":coin"=>$favCoin, ":avatar"=>$avatar, ":status"=>$status, ":role"=>$role));

// echo "Registro insertado!"
// ?>