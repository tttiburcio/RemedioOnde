<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="sistema/Jquery/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="sty.css" />
  <link rel="icon" href="img/cap.png">
  <title>RemedioOnde? - Entre ou Cadastre-se </title>

  <script>
    function validarSenha() {
      var senhaCliente = formcadastra.senhaCliente.value;
      var confirmaSenhaCliente = formcadastra.confirmaSenhaCliente.value;

      if (senhaCliente != confirmaSenhaCliente) {
        alert("As senhas não coincidem!");
        return false;
      }
      return true;
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="login.php" method="POST" class="sign-in-form">
          <h2 class="title">Faça Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" id="txtEmail" name="txtEmail" placeholder="E-mail" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="txtSenha" name="txtSenha" placeholder="Senha" required />
          </div>
          <input type="submit" value="Login" name="btnLogin" id="btnLogin" class="btn solid" />
          <p class="social-text">É um prazer ter você conosco!</p>
          <div class="social-media">
          </div>
        </form>
        <form name="formcadastra" action="cadastro.php" method="POST" class="sign-up-form" onsubmit="return validarSenha();">
          <h2 class="title">Cadastre-se</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" id="nomeCliente" name="nomeCliente" placeholder="Nome" required maxlength="80" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" id="emailCliente" name="emailCliente" placeholder="E-mail" required maxlength="80" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="senhaCliente" name="senhaCliente" placeholder="Senha" required maxlength="20" minlength="6" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="confirmaSenhaCliente" name="confirmaSenhaCliente" placeholder="Confirme sua senha" required maxlength="20" minlength="6" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" id="susCliente" name="susCliente" placeholder="Número SUS" required maxlength="18" minlength="18" />
          </div>
          <input type="submit" class="btn" name="btnCadUsuario" id="btnCadUsuario" value="Confirmar" />
          <p class="social-text">Obrigado pela preferência!</p>
          <div class="social-media">

          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>RemédioOnde? - Essence</h3>
          <p>
            Este é um projeto Essence para você - Cadastre-se Aqui!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            CADASTRE-SE
          </button>
        </div>
        <img src="img/wh.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>RemédioOnde? - Essence</h3>
          <p>
            Este é um projeto Essence para você - Faça Login!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            ENTRAR
          </button>
        </div>
        <img src="img/qts.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>

  <script type="text/javascript" src="sistema/Jquery/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#susCliente').mask('000⠀0000⠀0000⠀0000');
    });
  </script>


</body>

</html>