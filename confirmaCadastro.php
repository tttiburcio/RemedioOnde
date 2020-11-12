<?php
include_once("conexao.php");

$h = $_GET['h'];

if (!empty($h)) {
    $result->query("UPDATE tbUsuario SET statusUsuario = 1 WHERE MD5(id) = '$h'");
    echo "Cadastro realizado com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RemédioOnde? - Confirme seu Cadastro</title>

    <link rel="icon" href="img/cap.png">

    <link rel="stylesheet" href="teste.css" />


</head>

<body>
    <br><br>
    <center>
        <h3> É necessário confirmar seu cadastro através de um e-mail </h3>
    </center>

    <br><br>

    <form action="cadastro.php" method="POST">
        <input type="submit" value="CONFIRME AQUI" class="btn solid" />
    </form>

</body>

</html>