<?php 

    
   // MODES
    /*
            r - read only
            w - write (overwrites) 
            a - append 
            x - Create new file 
            r+ Read + Write 



    */
    $filename = "newfile.txt";
    if (!file_exists($filename)){
        $file = fopen($filename, "x");
        fwrite($file , "Hi my name is Athraa and I am a PHP Certified Developer.");
        fclose($file);
        echo "File Created with the appropriate text";
    } else {
        echo "File already exists";
    }
    

?>