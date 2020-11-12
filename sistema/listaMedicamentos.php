<?php
include_once("../conexao.php");
$conn = getConnection();

$result = mysqli_query($conn, "SELECT * FROM tbmedicamentos");

while ($linha = mysqli_fetch_array($result)) {
    echo "<tr>" . $linha["nomeMedicamento"] . "</tr>";
    echo "<tr>" . $linha["descricaoMedicamento"] . "</tr>";
    echo "<tr>" . $linha["qtdeMedicamento"] . "</tr>";
    echo "<tr>" . $linha["statusMedicamento"] . "</tr>";
}
