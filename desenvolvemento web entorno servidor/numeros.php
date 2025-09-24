<?php

    //numeros
    $x = 5;
    $y = 5.35;
    $z = "25";

    var_dump($x);
    var_dump($y);
    var_dump($z);

    var_dump(is_int($x)); #comproba a variable co tipo de dato indicado

    $x = 2542;
    var_dump(is_numeric($x));

    $x = "2542asde";
    var_dump(is_numeric($x)); #comproba si a variable conten un numero

?>