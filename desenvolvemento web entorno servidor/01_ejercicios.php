<?php

    /*1. Contar palabras mas largas de N caracteres
        Enunciado: Dado un string y un número N, cuenta
        cuantas palabras tienen más de N caracteres. Usa explode, strlen y bucles.
    */

    function countLongWords(string $text, int $n): int{
        $words = explode(" ", $text);
        $count = 0; // variable onde contamos as palabras
        foreach($words as $word){
            if(strlen($word) > $n){
                $count++;
            }
        }
        return $count;
    }

    echo countLongWords("hola hola que tal", 3);
    echo "\n";



    /* Dado un número de tarjeta "1234567812345678", enmascara todos menos 
    os últimos 4 digitos ("************5678"). Usa subtr_replace, str_repeat.
    */

    function maskCard(string $card): string{
        $asteriskCount = strlen($card) -4;
        $mask = str_repeat("*", $asteriskCount);
        $maskedCard = substr_replace($card, $mask, 0, -4);

        return $maskedCard;
    }

    echo maskCard("1234567812345678");
    echo "\n";


    /*Declara constantes MIN_EDAD = 18 y MAX_EDAD = 65.
    Crea unha función que verifique si unha edad está nese rango.
    */

    // const $MIN_EDAD = 18;
    // const $MAX_EDAD = 65;
    // function validarEdad(int $edad): boolean{
    //     return $edad >= $GLOBALS[$MIN_EDAD] && $edad <= $GLOBALS[$MAX_EDAD];
    // };

    // var_dump(validarEdad(18));
    // echo "\n";
    

    /*Dado un número do mes (1-12), devolve o trimestre ao que pertence
    usando switch ou match
    */

    function getTrimestre(int $mes): string{
        return match($mes){
            1, 2, 3 => "primeiro trimestre",
            4, 5, 6 => "segundo trimestre",
            7, 8, 9 => "terceiro trimestre",
            10, 11, 12 => "cuarto trimestre",
            default => "mes non válido"
        };
    }
    echo getTrimestre(3);
    echo "\n";


    /* Genera a tabla de multiplicar de un número n en un array indexado (ata 10)
    */

    function tablaMultiplicar(int $n): array{
        $tabla = [];
        for($i = 1; $i <= 10; $i++){
            $tabla[] = "$i x $n = ". ($i * $n);
        }
        return $tabla;
        
    }

    print_r(tablaMultiplicar(3));
    echo "\n";


    /*Dado un array, elimina os duplicados e devolve cantos tiña
    */

    function removeDuplicates(array $array): array{
        $sinDuplicados = array_unique($array);
        $duplicados = count($array) - count($sinDuplicados);

        return $resposta = [
            "array" => $sinDuplicados,
            "duplicados" => $duplicados
        ];
    }

    print_r(removeDuplicates(["ola", "ola", 2, 2, 3, 4, 5]));
    echo "\n";


    /* Dado un string, devolve un array asociativo ca frecuencia de cada palabra.
    */

    function wordFrequency(string $text): array{
        $lowerText = strtolower($text);
        $words = explode(" ", $lowerText);
        $frecuencia = [];
            foreach($words as $word){
                if(isset($frecuencia[$word])){
                    $frecuencia[$word]++;
                } else {
                    $frecuencia[$word] = 1;
                }
            }

        return $frecuencia;
        
    }

    print_r(wordFrequency("ola OLA que tal que tal"));
    echo "\n";
    


?>