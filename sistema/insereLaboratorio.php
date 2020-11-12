<?php
include_once("../conexao.php");
session_start();

$conn = getConnection();

$nomeLab = $_POST['nomeLab'];
$cnpjLab = $_POST['cnpjLab'];

/* echo $novoLab;
echo "<br />";
echo $cnpjLab; */

$result = mysqli_query($conn, "INSERT INTO tblaboratorio(nomeLaboratorio, cnpjLaboratorio) VALUES ('$nomeLab', '$cnpjLab')");

closeConnection($conn);

echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Laboratório adicionado com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.location.href="telaMedicamentos.php";';
echo '}, 1400);';
echo '</script>';
