<?php
include_once("../conexao.php");

$nomeMedicamento = $_POST['nomeMedicamento'];
$descricaoMedicamento = $_POST['descricaoMedicamento'];
$doseMedicamento = $_POST['doseMedicamento'];
$tipagemMedicamento = $_POST['tipagemMedicamento'];
$laboratorioMedicamento = $_POST['laboratorioMedicamento'];

$conn = getConnection();

//testando pra ver se os valores estão passando
/* print($nomeMedicamento);
echo "<br>";
print($descricaoMedicamento);
echo "<br>";
print($doseMedicamento);
echo "<br>";
print($tipagemMedicamento);
echo "<br>";
print($laboratorioMedicamento);
echo "<br>";
print($statusMedicamento);
echo "<br>"; */

$result = mysqli_query($conn, "INSERT INTO tbmedicamento(nomeMedicamento, descricaoMedicamento, codDosagem, codTipagem, codLaboratorio) VALUES ('$nomeMedicamento', '$descricaoMedicamento', '$doseMedicamento', '$tipagemMedicamento','$laboratorioMedicamento')");

closeConnection($conn);

echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Medicamento cadastrado com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.location.href="telaMedicamentos.php";';
echo '}, 1400);';
echo '</script>';
