<?php
include_once("../conexao.php");
$conn = getConnection();

$result = mysqli_query($conn, "SELECT * FROM tbMarkers");

while ($linha = mysqli_fetch_array($result)) {
    echo "<tr>" . $linha["name"] . "</tr>";
    echo "<tr>" . $linha["address"] . "</tr>";
    echo "<tr>" . $linha["type"] . "</tr>";
}
