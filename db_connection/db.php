<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce_app', 
    'root', 
    '',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

    $smtp = $pdo->prepare('SELECT * FROM products');
    $smtp->execute();
    $results = $smtp->fetchAll(PDO::FETCH_ASSOC);
   
    function e($value){
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

?>


    <?php foreach($results AS $result){ ?>
        <li>
        <?php echo e($result['name']); ?>
        </li>
    <?php } ?>
