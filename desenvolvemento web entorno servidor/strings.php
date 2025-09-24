<?php
    // strlen mostra a longitud do string
    $variable = "ola";
    echo strlen($variable);

    // lonxitude da string
    echo strlen("calquera cousa"). "\n";

    // contar palabras
    echo str_word_count("calquera outra cousa"). "\n";

    //posicion string
    echo strpos("ola mundo", "mundo"). "\n";

    //modificación de strings
    echo strtoupper("ola mundo"). "\n"; #pasar a mayusculas

    echo strtolower("OLA MUNDO")."\n"; #pasar a minusculas

    $un_string = "Ola mundo";
    echo str_replace("Ola", "Que tal", $un_string). "\n"; #cambia un string

    echo strrev("Ola mundo"). "\n"; #dalle a volta a un string

    echo " esto e unha cadea con espacios ". "\n";
    echo trim(" esto e unha cadea con espacios "). "\n"; #quita espacios ao principio e ao final


    $un_string = "1,2,3,4";
    $string_a_aray = explode(",", $un_string); #convertir strings en arrays cun criterio
    print_r($string_a_aray);


    //concatenación
    $un_string = "ola";
    $outro_string = "mundo";
    echo "$un_string $outro_string" . "\n";
    echo "$un_string" . "$outro_string" . "\n";


    //slice
    $un_string = "Ola mundo";
    echo substr($un_string, 5, 2). "\n"; #facer un substring

    echo substr($un_string, 5). "\n"; #facer un substring ata o final

    echo substr($un_string, -5, 2). "\n"; #facer un substring con index negativo (conta desde o final 5 letras para atras)

    echo substr($un_string, 2, -3). "\n"; #facer un substring con lonxitude negativo 

    

    // caracteres especiais
    echo "esto e algo \" especial \"". "\n"; #pon especial entre comillas



    
?>