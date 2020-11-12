<?php
include_once("../conexao.php");
session_start();

$quantidadeMedicamento = $_POST['quantidadeMedicamento'];
$codMedicamento = $_POST['medicamentoCadastrar'];
$codUbs = $_SESSION['codUbs'];

$conn = getConnection();

$result = mysqli_query($conn, "INSERT INTO tbmedicamento_ubs(codUbs,codMedicamento,quantidadeMedicamento) VALUES ('$codUbs','$codMedicamento','$quantidadeMedicamento')");

echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Medicamento atrellado a UBS com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.location.href="internaPosto.php";';
echo '}, 1400);';
echo '</script>';

closeConnection($conn);
