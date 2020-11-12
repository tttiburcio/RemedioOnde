<?php
function getConnection()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bdTcc";

    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if ($conn) {
        return $conn;
    }

    return null;
}

function closeConnection($conn)
{
    return mysqli_close($conn);
}
