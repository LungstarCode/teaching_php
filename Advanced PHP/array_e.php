<?php 

    $books = [
        ['title' => 'Cold-Case Christianinty'],
        'Make it stick'
    ];

    foreach($books AS $book){
        if(is_array($book)){
            echo $book['title'] . "<br>";
        } else echo $book;
    }
?>