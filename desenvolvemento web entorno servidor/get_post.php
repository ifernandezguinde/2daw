<?php
if(isset($_GET)){
    echo "Hai unha prticion con metodo GET: ";
    echo "<br>";
    print_r($_GET);
} else {
    echo "Non hai peticion GET";
}
echo "<br>";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<br>";
    echo "Hai unha prticion con metodo POST: ";
    echo "<br>";
    print_r($_POST);
} else {
    echo "<br>";
    echo "Non hai peticion POST";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probar GET e POST</title>
</head>
<body>
    <h1>Probar metodo POST</h1>
    <form method="POST">
        <input type="text" name="hola" required>
        <input type="number" name="id" placeholder="ID" required>
        <input type="submit" value="Enviar con POST">
    </form>

    <h1>Outras Superglobals</h1>
    <?php echo $_SERVER['PHP_HOST']?>
    <br>
    <?php $_SERVER['PHP_SELF']?>
</body>