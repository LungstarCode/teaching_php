<?php
    include 'connection.php';

    $name = "Lungile";
    $email = "lungile.mawila@eduvos.com";
    $course = "Information Systems Lecturer";


    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";

    if (mysqli_query($conn , $sql)){
        echo "Student Added successfully";
    }
    else {
        echo "Eroor: ". mysqli_error($conn);
    }
    

?>