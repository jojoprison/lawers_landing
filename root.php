<?php

$servername = "localhost";
$username = "mysql";
$password = "mysql";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_eror){
    die('Ошибка подключения к серверу баз данных: ' .$conn->connect_error);
}

try{
    $conn = new PDO("mysql:host=$servername; dbname=clients1", $username, $password);

    $sql = 
}
?>