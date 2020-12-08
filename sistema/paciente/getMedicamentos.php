<?php
include_once("../../conexao.php");

$conn = getConnection();

if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $result = mysqli_query($conn, "select * from tbmedicamento where descricaoMedicamento LIKE '$q%'");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['codMedicamento'];
            $medicamento = $row['descricaoMedicamento'];
            $data[] = array('codMedicamento' => $id, 'text' => $medicamento);
        }
    } else {
        $data[] = array('codMedicamento' => 0, 'text' => 'Medicamento não encontrado');
    }
    echo json_encode($data);
}
