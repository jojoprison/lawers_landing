<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=clients1", 'mysql', 'mysql');

    if (empty($_POST['phone'])) exit("Поле не заполнено");
    if (empty($_POST['content'])) exit("Поле не заполнено");

    $query = "INSERT INTO clients VALUES (NULL, :phone, :email, NOW())";
    $clt = $conn->prepare($query);
    $clt->execute(['phone' => $_POST['phone'], 'email' => $_POST['email']]);

    $clt_id = $conn->lastInsertId();

    $query = "INSERT INTO situations VALUES (NULL, :client_id, :content, NOW())";
    $sit = $conn->prepare($query);
    $sit->execute(['content' => $_POST['content'], 'client_id' => $clt_id]);

    header("Location: form_consultation.php");
}
catch (PDOException $e) {
    echo "error";
}
