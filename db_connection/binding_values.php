<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce_app', 'root', '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $stmt = $pdo->prepare('SELECT * FROM products WHERE id= :id ');
    $stmt->bindValue('id', (int) $_GET['id']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($result);

?>

