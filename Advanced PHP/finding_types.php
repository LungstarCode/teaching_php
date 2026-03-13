<?php 

    $number = 10;
    $decimal_number = 16.5;
    $name = "Lungile";

    var_dump(is_numeric($number));
    var_dump(is_float($decimal_number));
    var_dump(is_integer($number));
    var_dump(is_boo($number)); // false
    var_dump(is_string($name));

?>