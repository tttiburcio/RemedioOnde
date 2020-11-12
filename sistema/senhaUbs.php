<?php
include_once("../conexao.php");
session_start();

$conn = getConnection();

$passUbs = $_POST['passUbs'];
$codUbs = $_SESSION['codUbs'];

/* echo $passUbs;
echo "<br />";
echo $codUbs; */

function editarSenha($conn, $codUbs, $passUbs)
{
    mysqli_query($conn, "UPDATE markers SET senhaUbs = '$passUbs' WHERE codUbs = $codUbs");
}

editarSenha($conn, $codUbs, $passUbs);

closeConnection($conn);

echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Senha da UBS atualizada com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.location.href="internaPosto.php";';
echo '}, 1400);';
echo '</script>';
