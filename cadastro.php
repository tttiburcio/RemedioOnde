<?php
include_once("conexao.php");

$nomeCli = $_POST['nomeCliente'];
$emailCli = $_POST['emailCliente'];
$senhaCli = $_POST['senhaCliente'];
$confirmaSenhaCli = $_POST['confirmaSenhaCliente'];
$susCli = $_POST['susCliente'];

$conn = getConnection();

$duplicate = mysqli_query($conn, "select * from tbcliente where susCliente='$susCli' or emailCliente ='$emailCli'");

if (mysqli_num_rows($duplicate) > 0) {
    echo '<script src="Dist/sweetalert-dev.js"></script>';
    echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
    echo '<script type="text/javascript">';
    echo 'setTimeout (function (){swal("Ops!","Informações já cadastradas. Verifique seu email ou!","warning");';
    echo '}, 1);';
    echo '</script>';

    echo '<script type="text/javascript">';
    echo 'setTimeout (function (){window.location.href="entrada.php";';
    echo '}, 2200);';
    echo '</script>';
} else {
    $result = mysqli_query($conn, "INSERT INTO tbcliente(nomeCliente, emailCliente, senhaCliente, confirmaSenhaCliente, susCliente) VALUES ('$nomeCli', '$emailCli', '$senhaCli', '$confirmaSenhaCli', '$susCli')");
    echo '<script src="Dist/sweetalert-dev.js"></script>';
    echo '<link rel="stylesheet" href="Dist/sweetalert.css">';
    echo '<script type="text/javascript">';
    echo 'setTimeout (function (){swal("Sucesso!","Cadastro realizado com sucesso!","success");';
    echo '}, 1);';
    echo '</script>';

    echo '<script type="text/javascript">';
    echo 'setTimeout (function (){window.location.href="entrada.php";';
    echo '}, 1400);';
    echo '</script>';
}

closeConnection($conn);




//testando pra ver se os valores estão passando
//print($nomeUsuario);
//echo "<br>";
//print($emailUsuario);
//echo "<br>";
//print($senhaUsuario);
//echo "<br>";
//print($confirmaSenhaUser);
//echo "<br>";
//print($numeroSusUsuario);
//echo "<br>";



//$id = $result->lastInsertId();
//$md5 = md5($id);

//$assunto = "Confirme seu cadastro:";
//$link = "http://localhost/tcc/confirmaCadastro.php?h=".$md5;
//$mensagem = "Clique aqui para confirmar seu cadastro ".$link;
//$header = "From: asd"

//mail($emailUsuario, $assunto, $mensagem, $header);
