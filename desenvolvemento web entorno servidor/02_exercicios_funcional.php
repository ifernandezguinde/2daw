<?php
    /*
        Exercicio 1: Dado un array de cadeas, devolve un array con solo aquelas 
    que sean palíndromas (se leen igual ao dereito e ao revés).
    (usando array_filter)
    */

    function filtrarPalindromos(array $array): array{
        return array_filter($array, function($palabra){
            $palabra = strtolower($palabra);
            return $palabra === strrev($palabra);
        });
    }
    
    echo "EJERCICIO 1 \n";
    print_r(filtrarPalindromos(["oso", "casa", "reconocer", "php", "Ana"]));


    /*
        Exercicio 2: Dada unha lista de productos con nome e precio
        devolve o array cos nomes dos productos que costen mais de 20€.
        (usando array_filter + array_map)
    */ 


    /* echo "\n";
    function productosCaros(array $productos, float $precioLimite): array{
        $caros = array_filter($productos, 
            fn($p) => $p["precio"] > $precioLimite
        );
        return array_map(
            fn($p) => $p["nome"],
            $caros
        );
    }

    echo $productos = [
        ["nome" => "Camiseta", "precio" => 15],
        ["nome" => "Pantalón", "precio" => 30],
        ["nome" => "Zapatos", "precio" => 50],
    ];
    echo "EJERCICIO 2 \n";
    print_r(productosCaros($productos, 20));
    echo "\n"; */



    /*
        Exercicio 3: Dado un array de prases, devolve un array co número de palabras 
        de cada frase.
        (usando array_map + explode)
    */


    function contarPalabrasFrases(array $frases): array{
        return array_map(
            fn($frase) => count(explode(" ", $frase)),
            $frases
        );
    }

    echo "EJERCICIO 3 \n";
    echo "\n";
    print_r(contarPalabrasFrases([
        "Hola mundo",
        "PHP es divertido",
        "La programación funcional con map filter reduce"
    ]));
    echo "\n"; 


    /*
        Exercicio 4: Dada unha lista de estudiantes cas súas notas,
        calcula o promedio de todas as notas.
        (usando array_reduce)
    */


    function promedioNotas(array $alumnos): float{
        $notas = array_reduce(
            $alumnos, 
            fn($carry, $alumno) => $carry + $alumno["nota"], 
            0
        );
        return $notas / count($alumnos);
    }

    $alumnos = [
        ["nome" => "Ana", "nota" => 7],
        ["nome" => "Luis", "nota" => 5],
        ["nome" => "Marta", "nota" => 9],
    ];
    echo "EJERCICIO 4 \n";
    echo promedioNotas($alumnos);
    echo "\n";


    /*
        Exercicio 5: Dado un array de strings, devolve a lonxitude total das palabras
        que teñen máis de 3 caracteres.
    */

        function longitudPalabrasLargas(array $palabras): int{
            return array_reduce(
                $palabras,
                fn($acc, $palabra) => strlen($palabra) >3 ? $acc + strlen($palabra) : $acc,
                0
            );
        }

    echo "EJERCICIO 5 \n";
    echo longitudPalabrasLargas(["sol", "estrella", "luz", "universo"]) . "\n";


    /*
        Exercicio 6: Dado un array de frases, devolve un array con cada frase invertida palabra por palabra
    */


    function invertirFrases(array $frases): array{
        return array_map(
            fn($frase) => implode(" ", array_reverse(explode(" ", $frase))),
            $frases
        );
    }

    echo "EJERCICIO 6 \n";
    print_r(invertirFrases([
        "Hola mundo", 
        "PHP es genial", 
        "Programación funcional"
    ]));


    /*
        Exercicio 7: Dado un array de números, devolve o producto dos impares.
    */

    function productoImpares(array $numeros): int{
        return array_reduce(
            $numeros,
            fn($acc, $num) => $num % 2 !== 0 ? $acc * $num : $acc,
            1
        );
    }

    echo "\nEJERCICIO 7 \n";
    echo productoImpares([1, 2, 3, 4, 5]) . "\n";



    /*
        Exercicio 8: Dado un aray de cadenas, devolve un array asociativo
        donde a clave é a palabra e o valor da súa lonxitude.
        (usando array_combine + array_map)
    */

    function mapaLongitudes(array $palabras): array{
        return array_combine(
            $palabras,
            array_map(fn($palabra) => strlen($palabra), $palabras)
        );
    }

    echo "EJERCICIO 8 \n";
    print_r(mapaLongitudes(["php", "programacion", "array", "reduce"]));


    /*
        Exercicio 9: Dado unha lista de parsoas con nombre e idade,
        devolve a idade promedio dos mayorees de idade.
    */

    function promedioMayores(array $personas): float{
        $suma = 0;
        $contador = 0;
        foreach($personas as $p){
            if($p["idade"] >= 18){
                $suma += $p["idade"];
                $contador++;
            }
            
        }
        return $contador > 0 ? $suma / $contador : 0;

    }

    echo "\nEJERCICIO 9 \n";
    $personas = [
        ["nome" => "Ana", "idade" => 17],
        ["nome" => "Luis", "idade" => 20],
        ["nome" => "Marta", "idade" => 25],
    ];
    echo promedioMayores($personas) . "\n";



    /*
        Exercicio 10: Dado un array de palabras, devolve a palabra mais larga.
    */

    function palabraMaisLarga(array $palabras): string{
        return array_reduce(
            $palabras,
            fn($max, $palabra) => strlen($palabra) > Strlen($max) ? $palabra : $max,
            ""
        );
    }


    echo "EJERCICIO 10 \n";
    echo palabraMaisLarga(["sol", "estrellas", "galaxia", "universo"]) . "\n";



    /*
        Exercicio 11: Dado un array de palabras, devolve un array cas palabras ordenadas
        por lonxitude de menor a mayor.
        (usando usort con función anónima + array_values)
    */

    function ordenarPorLongitud(array $palabras): array{
        usort(
            $palabras, 
            fn($pal1, $pal2) => strlen($pal1) > strlen($pal2) ? 1 : -1
        );
        return array_values($palabras);
    }

    echo "EJERCICIO 11 \n";
    print_r(ordenarPorLongitud(["php", "programación", "map", "filter", "reduce"]));


    /*
        Exercicio 12: Dado un array de números, devolve un array cos cadrados
        dos números positivos e descarta os negativos
    */


    function cuadradosPositivos(array $numeros): array{
        $positivos = array_filter(
            $numeros,
            fn($n) => $n >= 0
        );
        return array_map(
            fn($n) => $n * $n,
            $positivos);
    }

    echo "EJERCICIO 12 \n";
    print_r(cuadradosPositivos([-3, -1, 0, 2, 4]));


    /*
        Exercicio 13: Dado un array de frases, devolve a suma de caracteres
        (ignorando espazos).
    */

    function totalCaracteresSinEspacios(array $frases): int{
        return array_reduce(
            $frases,
            fn($acc, $frase) => $acc + strlen(str_replace(" ", "", $frase)),
            0
        );
    }

    echo "\nEJERCICIO 13 \n";
    echo totalCaracteresSinEspacios([
        "Hola mundo", 
        "php es genial", 
        "programacion funcional"
    ]);


    /*
        Exercicio 14: Dada unha lista de estudiantes con nombre e notas (array de enteiros),
        devolve un array asociativo co nombre e a sua nota promedio.
    */


    function promediosEstudiantes(array $estudiantes): array{
        $promedios =[];
        foreach($estudiantes as $est){
            $suma = array_reduce(
                $est["notas"],
                 fn($acc, $n) => $acc + $n, 0
                );
            $promedios[$est["nome"]] = $suma / count($est["notas"]);
        };
        return array_map (
            fn($n) => round($n, 2),
            $promedios
        );
    }

    echo "\nEJERCICIO 14 \n";
    $clase =[
        ["nome" => "Ana", "notas" => [7, 8, 9]],
        ["nome" => "Luis", "notas" => [5, 6, 7]],
        ["nome" => "Marta", "notas" => [9, 9, 10]],
    ];
    print_r(promediosEstudiantes($clase));
?>