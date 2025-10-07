<?php

/*
    Comprobar si unha cadena contén solo dígitos
*/

function ejercicio1() {
    $test = ["1234", "a1234v"];
    foreach($test as $t){
        if(preg_match("/^\d+$/", $t)){
            echo "'$t'é valido \n";
        } else {
            echo "'$t' NON é valido \n";
        }
    }
}

ejercicio1();
echo "\n";


/*
    Validar si un texto contén solo letras minúsculas
*/

function ejercicio2() {
    $test = ["hola", "HOLA"];
    foreach($test as $t){
        if(preg_match("/^[a-z]+$/", $t)){
            echo "'$t'é valido \n";
        } else {
            echo "'$t' NON é valido \n";
        }
    }
}

ejercicio2();
echo "\n";


/*
    Validar se un texto empeza en maiúscula
*/

function ejercicio3() {
    $test = ["Casa", "casa"];
    foreach($test as $t){
        if(preg_match("/^[A-Z]/", $t)){
            echo "'$t'é valido \n";
        } else {
            echo "'$t' NON é valido \n";
        }
    }
}

ejercicio3();
echo "\n";


/*
    Extraer todos os números dunha cadena de texto
*/

function ejercicio4() {
    $test = ["Tengo 2 perros y 3 gatos"];
    foreach($test as $t){
        preg_match_all("/\d+/", $t, $matches);
        print_r($matches[0]);
    }
}

ejercicio4();
echo "\n";


/*
    Comprobar si un correo é válido
    Acepta: caracteres alfanuméricos,.,_,-
    \w = [a-z0-9_]
*/

function ejercicio5() {
    $test = ["test@mail.com", "badmail@", "otro.do_1@dominio.es", "ola@mal", "outr@mal.malmal"];
    foreach($test as $t){
        if(preg_match("/^[\w.-]+@[\w.-]+\.[A-z]{2,3}$/", $t)){
            echo "'$t' é valido \n";
        } else {
            echo "'$t' NON é valido \n";
        }
    }
}

ejercicio5();
echo "\n";


/*
    validar formato de fecha dd/mm/yyyy
*/

function ejercicio6() {
    $test = ["21/04/2024", "2024-04-21", "21-04-2024", "21.04.2024", "21-13-2024"];
    foreach($test as $t){
        // echo preg_match("#^\d{2}\/\d{2}\/\d{4}\$#", $t) ? "$t é valido \n" : "$t NON é valido \n";  forma simple
        // echo preg_match("#^\d{2}[\/\-]\d{2}[\/\-]\d{4}\$#", $t) ? "$t é valido \n" : "$t NON é valido \n"; acepta guións e barras
        echo preg_match("#^(0[1-9]|1[0-9]|2[0-9]|3[0-1])[\/\-](0[1-9]|1[0-2])[\/\-]\d{4}\$#", $t) ? "$t é valido \n" : "$t NON é valido \n";
    }
}

ejercicio6();
echo "\n";


/*
    Sustituir múltiples espacios por un solo
*/

function ejercicio7() {
    $test = ["Hola    mundo   PHP"];
    foreach($test as $t){
        $resultado = preg_replace("/\s+/", " ", $t);
        echo "$resultado \n";
    }
}

ejercicio7();
echo "\n";


/*
    Validar si un número de teléfono é español (9 dígitos, pode empezar por 6, 7, 8 ou 9)
*/

function ejercicio8() {
    $test = ["612345678", "912345678", "12345"];
    foreach($test as $t){
        echo preg_match("/^[6789]\d{8}$/", $t) ? "'$t' é valido \n" : "'$t' NON é valido \n";
    }
}

ejercicio8();
echo "\n";


/*
    Extraer palabras que comenzen por maiúscula
*/

function ejercicio9() {
    $text = "Hola Mundo desde PHP";
        preg_match_all("/\b[A-Z]+[a-z]*\b/", $text, $matches);
        print_r($matches);
}

ejercicio9();
echo "\n";


/*
    Validar unha contraseña segura (mínimo 8 caracteres, polo menos unha maiúscula, unha minúscula, un díxito e un símbolo)
*/

function ejercicio10() {
    $pass = ["abc123", "Abc123.$"];
    foreach($pass as $p){
        echo preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W).{8,}$/", $p) ? "$p é valido \n" : "$p NON é valido \n";
    }
}

ejercicio10();
echo "\n";

?>