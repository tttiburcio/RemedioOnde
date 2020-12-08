<?php

include_once("../conexao.php");
$conn = getConnection();

$medicamentoCadastrar = $_GET['medicamentoCadastrar'];

$result = mysqli_query($conn, "SELECT * FROM tbmedicamento as med INNER JOIN tbtipaggem as esmed ON esmed.codTipagem = med.codTipagem WHERE med.codMedicamento = $medicamentoCadastrar");

echo "<option>Tipagem Medicamento:</option>";
while ($linha = mysqli_fetch_array($result)) {
    echo "<option value=" . $linha["codTipagem"] . ">" . $linha["descricaoTipagem"] . "</option>";
}

closeConnection($conn);
