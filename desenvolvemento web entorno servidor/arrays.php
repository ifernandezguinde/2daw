<?php

    // arrays
    // $coches = array("Volvo", "BMW", "Toyota");
    $coches =["Volvo", "BMW", "Toyota"];
    var_dump($coches);
    print_r($coches);

    $un_array = [1, "string", true, 2.4, [1,2]];
    print_r($un_array);

    echo count($coches);
    echo "\n";
    echo count($un_array);
    echo "\n";

    // arrays indexados
    $coches =["Volvo", "BMW", "Toyota"];
    echo $coches[0];
    echo "\n";
    foreach($coches as $coche){
        echo "$coche";
    }

    array_push($coches, "Ford"); // engade un elemento
    print_r($coches);

    $coches[7] = "outro";
    print_r($coches);

    // echo $coches[4]; // da error porque non ha nada na posicion 4 do array


    // arrays asociativos
    $coche = [
        "marca" => "Ford",
        "modelo" => "mustang",
        "ano" => 1964,
    ];
    var_dump($coche);

    echo $coche["marca"];

    $coche["ano"] = 2020; // cambia o valor no array
    var_dump($coche);

    // crear arrays
    $meu_coche = [];
    $meu_coche["marca"] = "Ford";
    $meu_coche["ano"] = 2015;
    var_dump($meu_coche);


    $aray_mixto = [];
    $aray_mixto[0] = "mazá";
    $aray_mixto[1] = "pera";
    $aray_mixto["fruta"] = "cereza";
    var_dump($aray_mixto);

    function unha_funcion(){
        echo "ola\n";
    }
    $outro_array = [
        "car" => "Volvo",
        "mensaxe" => unha_funcion()
    ];

    $outro_array;

    //updatear datod do array
    $coches = ["Volvo", "BMW", "Toyota"];
    foreach($coches as &$coche){
        $coche = "Ford";
    }
    var_dump($coches);


    // engadir items a un array
    $coches = ["Volvo", "BMW", "Toyota"];
    $coches[] = "Ford";
    var_dump($coches);

    array_push($coches, "Mercedes", "Suzuki"); // engade máis de un
    var_dump($coches);


    $coches_asociativo = [
        "marca" => "ford",
        "modelo" => "mustang",
    ];
    $coches_asociativo += ["color" => "rojo", "ano" => 2010]; // engade poñendo +=
    var_dump($coches_asociativo);


    // eliminar items
    $coches = ["Volvo", "BMW", "Toyota"];
    array_splice($coches, 1, 1); // borra indicando a posicion no array
    var_dump($coches);

    $coches = ["Volvo", "BMW", "Toyota"];
    unset($coches[1]); // borra o elemento da posición indicada pero descarta o indice
    var_dump($coches);


    $coche = [
        "marca" => "Ford",
        "modelo" => "mustang",
        "ano" => 1964,
    ];

    $un_novo_array = array_diff($coche, ["Mustang", 1964]);
    var_dump($un_novo_array);

    //array_pop($coche); // elimina o ultimo item do array
    //array_shift($coche); // elimina a primeiro item do array



    //ordenar arrays
    $coches = ["Volvo", "BMW", "Toyota"];
    sort($coches);
    var_dump($coches);
    // neste caso ordenaos alfabeticamente

    $numeros = [5,7,2,1,8];
    sort($numeros);
    var_dump($numeros);
    // ordenaos ascendentemente

    rsort($coches);
    rsort($numeros);
    var_dump($coches);
    var_dump($numeros);
    // ordenaos descendentemente


    //ordenar arrays asociativos
    $idades = [
        "pedro" => "25",
        "pablo" => "56",
        "pepito" => "43",
    ];

    asort($idades); //ascendente pola idade
    var_dump($idades);

    ksort($idades); // ascendente pola clave
    var_dump($idades);




?>