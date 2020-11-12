<?php

include_once("../conexao.php");
$conn = getConnection();

$tipagemMedicamento = $_GET['tipagemMedicamento'];

$result = mysqli_query($conn, "SELECT * FROM tbtipaggem as es INNER JOIN tbtipo_dosagem as esmed ON es.codTipagem = esmed.codTipagem INNER JOIN tbdosagem as med ON esmed.codDosagem = med.codDosagem WHERE es.codTipagem = $tipagemMedicamento");

echo "<option>Dosagem Medicamento:</option>";
while ($linha = mysqli_fetch_array($result)) {
    echo "<option value=" . $linha["codDosagem"] . ">" . $linha["doseMedicamento"] . "</option>";
}

closeConnection($conn);
