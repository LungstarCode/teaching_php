<?php 

    echo file_get_contents("newfile.txt"); // read the entire Content 
    echo "<br> ___________________________________________________ <br>";

    # read the file line by line 

    $file = fopen("newfile.txt", "r");
    while(!feof($file)){
        echo fgets($file) . "<br>";
    }

    fclose($file);
    
    echo "<br> ___________________________________________________ <br>";

    $file = fopen("newfile.txt", "r");
    
    while(!feof($file)){
        echo fgetc($file) . "  " ;
    }

    fclose($file);

    echo "<br> ___________________________________________________ <br>";


?>

