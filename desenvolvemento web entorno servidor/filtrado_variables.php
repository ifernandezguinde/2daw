<?php
/*
filter_var() para validar e sanitizar data -> mixed (devolve diferentes cousas. bool, int, string...)
    @value: variable que se quere comprobar
    @filter: tipo de comprobación
*/

//===========================================================================================================
// SANITIZAR
//===========================================================================================================

$unString = "<h1>Ola mundo</h1>";
$novoString = filter_var($unString, FILTER_SANITIZE_STRING); // deprecated
echo $novoString. "\n";

echo strip_tags($unString). "\n". "\n"; // forma actual



//===========================================================================================================
// VALIDAR
//===========================================================================================================

/*
VALIDATE devolve _>
    - mixed: o valor
    - false: se a validación falla
*/

/* validar enteiros */
$int = 0;
var_dump(filter_var($int, FILTER_VALIDATE_INT));

// forma incorecta
if(filter_var($int, FILTER_VALIDATE_INT)){
    echo "O enteiro $int e valido". "\n";
} else {
    echo "O enteiro $int NON e valido". "\n";
}

// forma correcta
var_dump(!filter_var(0, FILTER_VALIDATE_INT) === false || filter_var(0, FILTER_VALIDATE_INT) === 0 );

var_dump(filter_var(0, FILTER_VALIDATE_INT) !== false); // usar esta

if(filter_var($int, FILTER_VALIDATE_INT) !== false){
    echo "O enteiro $int e valido". "\n";
} else {
    echo "O enteiro $int NON e valido". "\n". "\n";
}


//===========================================================================================================
// validar unha direccion ip
//===========================================================================================================

$ip = "127.0.0.1";

if(filter_var($ip, FILTER_VALIDATE_IP) !== false){
    echo "$ip é unha ip válida". "\n";
} else {
    echo "$ip non é unha ip válida". "\n";
}

//===========================================================================================================
// validar direccion de email
//===========================================================================================================

$casos = [
    "usuario <script> añert() </script>@gmail.com",
    "john@company.com",
    "maria-con espacios@empresa.com",
    "pedro\nlinea@email.com"
];
function sanitizarEmails(array $listaEmails) {
    foreach($listaEmails as $email){
        $sanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $eValido = filter_var($sanitizado, FILTER_VALIDATE_EMAIL) !== false;
        echo "Orixinal: $email\n";
        echo "Sanitizado: $email\n";
        echo "E valido?" . ($eValido? "SI" : "NON"). "\n";
    }
}



?>