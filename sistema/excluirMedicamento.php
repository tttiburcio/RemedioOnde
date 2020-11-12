<?php
include_once("../conexao.php");

$conn = getConnection();

$codMedicamento = intval($_GET['codMedicamento']);

/* echo $codMedicamento; */

excluirAgendamento($conn, $codMedicamento);

function excluirAgendamento($conn, $codMedicamento)
{
    mysqli_query($conn, "DELETE FROM tbmedicamento WHERE codMedicamento = $codMedicamento");
}

closeConnection($conn);


echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Medicamento excluido com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.location.href="estoque.php";';
echo '}, 1000);';
echo '</script>';
