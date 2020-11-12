<?php
include_once("../conexao.php");

$conn = getConnection();

$tipagemMedicamento = $_GET['tipagemMedicamento'];

$result = mysqli_query($conn, "SELECT * FROM tbmedicamento_unidade");

for ($i = 0; $i < $tamanho; $i++) {
    $array[$i] = trim($array[$i]);
    $verify = mysqli_query($conn, "Select * From tb WHERE nomeServico like '$array[$i]%'");
    while ($linha = mysqli_fetch_array($verify)) {
        $servico = $linha["codServico"];
    }
}

while ($linha = mysqli_fetch_array($result)) {
    $id = $linha["idCliente"];
    $inserir = mysqli_query($conn, "INSERT INTO tbagendamento (dataAgendamento,horarioAgendamento,idCliente,subTotal,codStatusAgendamento,horarioFim) VALUES ('$data','$horario','$id','$subTotal',1,'$horaFim')");
    $inserir = mysqli_insert_id($conn);
}

echo '<script src="Dist/sweetalert-dev.js"></script>';
echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
echo '<script type="text/javascript">';
echo 'setTimeout (function (){swal("Sucesso!","Agendado com sucesso!","success");';
echo '}, 1);';
echo '</script>';

echo '<script type="text/javascript">';
echo 'setTimeout (function (){window.    location.href="Agendamento.php";';
echo '}, 1300);';
echo '</script>';

closeConnection($conn);
