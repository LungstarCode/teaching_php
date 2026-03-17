<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce_app', 'root', '',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

    $stmt = $pdo->prepare("INSERT INTO products (name, price, description) VALUES (:name , :price, :description)");
    $stmt->bindValue('name', $_GET['name']);
    $stmt->bindValue('price', $_GET['price']);
    $stmt->bindValue('description', $_GET['description']);
    $stmt->execute();

    ?>