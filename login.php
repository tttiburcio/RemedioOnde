<?php
include_once("conexao.php");

$emailCli = $_POST['txtEmail'];
$senhaCli = $_POST['txtSenha'];

$conn = getConnection();

$verifica = mysqli_query($conn, "Select * From tbcliente where emailCliente = '" . $emailCli . "' and senhaCliente = '" . $senhaCli . "'");

$verifica2 = mysqli_query($conn, "Select * From tbadm where emailAdm = '" . $emailCli . "' and senhaAdm = '" . $senhaCli . "'");

$verifica3 = mysqli_query($conn, "Select * From markers where address = '" . $emailCli . "' and senhaUbs = '" . $senhaCli . "'");

$verifica4 = mysqli_query($conn, "Select * From markers where nicknameUbs = '" . $emailCli . "' and senhaUbs = '" . $senhaCli . "'");

closeConnection($conn);

if (mysqli_num_rows($verifica) > 0) {
  session_start();
  $_SESSION['emailCliente'] = $emailCli;
  $_SESSION['senhaCliente'] = $senhaCli;
  while ($linha = mysqli_fetch_array($verifica)) {
    $_SESSION['nomeCliente'] = $linha["nomeCliente"];
  }

  header("Location: sistema/paciente/internaCliente.php");
} else if (mysqli_num_rows($verifica2) > 0) {
  session_start();
  $_SESSION['emailCliente'] = $emailCli;
  $_SESSION['senhaCliente'] = $senhaCli;

  header("Location: sistema/interna.php");
} else if (mysqli_num_rows($verifica3) > 0) {
  session_start();
  $_SESSION['emailCliente'] = $emailCli;
  $_SESSION['senhaCliente'] = $senhaCli;
  while ($linha = mysqli_fetch_array($verifica3)) {
    $_SESSION['address'] = $linha["address"];
    $_SESSION['codUbs'] = $linha["codUbs"];
    if ($linha["nicknameUbs"] == "") {
      header("Location: sistema/complementoUbs.php");
    } else {
      header("Location: sistema/internaPosto.php");
    }
  }
} else if (mysqli_num_rows($verifica4) > 0) {
  session_start();
  $_SESSION['emailCliente'] = $emailCli;
  $_SESSION['senhaCliente'] = $senhaCli;
  while ($linha = mysqli_fetch_array($verifica4)) {
    $_SESSION['address'] = $linha["address"];
    $_SESSION['codUbs'] = $linha["codUbs"];
  }
  header("Location: sistema/internaPosto.php");
} else {

  echo '<script src="Dist/sweetalert-dev.js"></script>';
  echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
  echo '<script type="text/javascript">';
  echo 'setTimeout (function (){swal("Erro!","Usuário não encontrado, verifique suas informações!","error");';
  echo '}, 1);';
  echo '</script>';

  echo '<script type="text/javascript">';
  echo 'setTimeout (function (){window.location.href="entrada.php";';
  echo '}, 2250);';
  echo '</script>';

  exit();
}
