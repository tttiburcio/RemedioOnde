<?php
include_once("../conexao.php");
session_start();

$quantidadeMedicamento = $_POST['quantidadeMedicamento'];
$statusMedicamento = $_POST['statusMedicamento'];
$codMedicamento = $_POST['codMedicamento'];
$codUbs = $_SESSION['codUbs'];

function atualizarQuantidade($conn, $codUbs, $codMedicamento, $statusMedicamento, $quantidadeMedicamento)
{
    $query = "";
    if ($statusMedicamento == "1") {
        $query = "UPDATE tbmedicamento_ubs m SET m.quantidadeMedicamento = m.quantidadeMedicamento + " . $quantidadeMedicamento . " WHERE m.codUbs = " . $codUbs . " and m.codMedicamento = " . $codMedicamento . "";
    } else {
        $query = "UPDATE tbmedicamento_ubs m SET m.quantidadeMedicamento = m.quantidadeMedicamento - " . $quantidadeMedicamento . " WHERE m.codUbs = " . $codUbs . " and m.codMedicamento = " . $codMedicamento . "";
    }
    mysqli_query($conn, $query);
}

$conn = getConnection();

$remediosDisponiveis = mysqli_query($conn, "SELECT * FROM tbmedicamento_ubs m WHERE m.codMedicamento = '$codMedicamento' and m.codUbs = '$codUbs'");

$isPresent = mysqli_num_rows($remediosDisponiveis) > 0;

if ($isPresent) {
    atualizarQuantidade($conn, $codUbs, $codMedicamento, $statusMedicamento, $quantidadeMedicamento);
} else {
    mysqli_query($conn, "INSERT INTO tbmedicamento_ubs(codUbs,codMedicamento,quantidadeMedicamento,statusMedicamento) VALUES ('$codUbs','$codMedicamento','$quantidadeMedicamento', '$statusMedicamento')");
}

echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Quantidade disponível atualizada com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.location.href="internaPosto.php";';
echo '}, 1400);';
echo '</script>';

closeConnection($conn);
