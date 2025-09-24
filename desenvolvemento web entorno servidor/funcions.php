<?php

    //Numero indeterminado de argumentos
    //var_dump(count([1,2,4]));

    function suma_numeros(...$x){
        $n = 0;
        var_dump($x);
    }

    suma_numeros(1,2,3,4,5,6);


    // saludo_familia(Perez, pepito, jose, pablo) -> Hola pepito perez\n Hola jose perez...

    function saludo_familia($apelido, ...$nombres){
        $output = "";
        foreach($nombres as $nombre){
            $output .= "Hola $nombre $apelido\n";
        }
        return $output;
    }

    echo saludo_familia("Perez", "Pepito", "Jose", "Pablo");


    


?>