<?php
if(!isset($_SESSION['id_user'])){
    echo 'no tenes la sesion iniciada';
    header('location:'.BASE_URL);
    die();
}