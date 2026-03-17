<?php

    function e($value){
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce_app', 'root', '',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

    $smtp= $pdo->prepare("SELECT name FROM products WHERE id='1'");
    $smtp->execute();
    $results= $smtp->fetchAll(PDO::FETCH_ASSOC);
   
    foreach($results AS $result){ ?>
        <li>
            <?php echo e($result['name'])?>
        </li>
    <?php } 
    
    ?>

