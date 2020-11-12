<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=clients1", 'mysql', 'mysql');

    $query = "INSERT INTO clients VALUES (NULL, :name, :phone, NOW())";
    $client = $conn->prepare($query);
    $client->execute(['name' => $_POST['name'], 'phone' => $_POST['phone']]);

    header("Location: index.php");
}
catch (PDOException $e) {
    echo "error";
}
