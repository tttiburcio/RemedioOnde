<?php

include_once("../conexao.php");
$conn = getConnection();

$laboratorioMedicamento = $_GET['laboratorioMedicamento'];

$result = mysqli_query($conn, "SELECT * FROM tblaboratorio WHERE nomeLaboratorio = $laboratorioMedicamento");

echo "<option>Dosagem Medicamento:</option>";
while ($linha = mysqli_fetch_array($result)) {
    echo "<option value=" . $linha["codDosagem"] . ">" . $linha["doseMedicamento"] . "</option>";
}

closeConnection($conn);
