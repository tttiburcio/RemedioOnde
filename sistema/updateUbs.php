<?php
include_once("../conexao.php");
session_start();

$conn = getConnection();

$codUbs = $_SESSION['codUbs'];
$nickUbs = $_POST['nickUbs'];
$passwordUbs = $_POST['passwordUbs'];

complementaUbs($conn, $codUbs, $nickUbs, $passwordUbs);

function complementaUbs($conn, $codUbs, $nickUbs, $passwordUbs)
{
    mysqli_query($conn, "UPDATE markers SET nicknameUbs = '$nickUbs',senhaUbs = '$passwordUbs' WHERE codUbs = $codUbs");
}

closeConnection($conn);

echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Informações atualizadas com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.location.href="internaPosto.php";';
echo '}, 1000);';
echo '</script>';
