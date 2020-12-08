<?php
include_once("../verificaLogin.php");
?>

<html>

<head>
    <meta charset="utf-8">
    <title>RemédioOnde? Área da UBS!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="icon" href="../img/cap.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Chivo" rel="stylesheet">

    <link href="../css/gg.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function buscaDosagem() {
            var con_consulta;

            if (window.XMLHttpRequest) {
                con_consulta = new XMLHttpRequest();
            } else {
                con_consulta = new ActiveXObject("Microsoft.XMLHTTP");
            }
            con_consulta.onreadystatechange = function() {
                if (con_consulta.readyState == 4 && con_consulta.status == 200) {
                    document.getElementById("dosagemMedicamento").innerHTML = con_consulta.responseText;
                }
            }

            var tipagem = document.getElementById("tipagemMedicamento").value;

            con_consulta.open("GET", "pesquisaDosagem.php?tipagemMedicamento=" + tipagem, true);
            console.log(con_consulta);
            con_consulta.send(null);
        }
    </script>

    <script type="text/javascript">
        function buscaAtributos() {
            var con_consulta;

            if (window.XMLHttpRequest) {
                con_consulta = new XMLHttpRequest();
            } else {
                con_consulta = new ActiveXObject("Microsoft.XMLHTTP");
            }
            con_consulta.onreadystatechange = function() {
                if (con_consulta.readyState == 4 && con_consulta.status == 200) {
                    document.getElementById("tipagemMedicamento").innerHTML = con_consulta.responseText;
                }
            }

            var medicamentot = document.getElementById("medicamentoCadastrar").value;

            con_consulta.open("GET", "pesquisaTipagem.php?medicamentoCadastrar=" + medicamentot, true);
            con_consulta.send(null);
        }
    </script>

    <script>
        function beforeModal(id, quantidade) {
            document.getElementById('codMedicamento').value = id;
            document.getElementById('quantidadeExistente').value = quantidade;
        }

        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })

        function validarEntrada() {
            const opcao = document.getElementById("statusMedicamento").value;
            const valor = parseInt(document.getElementById("quantidadeMedicamento").value);
            const quantidadeExistente = parseInt(document.getElementById('quantidadeExistente').value);
            if (opcao === "0" && valor > quantidadeExistente) {
                alert('Não é possível retirar essa quantidade!')
                return false;
            }
            return true;
        }
    </script>

    <style type="text/css">
        #left {
            margin-left: 20%;
        }

        #lef {
            margin-left: 41%;
        }

        #bt {
            margin-left: 30%;
            width: 25%;
            border-radius: 10px;
        }

        #logout {
            margin-top: -6%;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 35%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 12px;
            /* Add some space below the input */
            margin-left: 65%;
        }



        #myTable th,
        #myTable td {
            text-align: left;
            /* Left-align text */
            padding: 12px;
            /* Add padding */
        }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
        }
    </style>

    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <a href="#intro" class="scrollto"><img src="../img/Logov6.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">

                <ul>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name"><?php echo $_SESSION['address'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a href="complementoUbs.php">
                                <i class="mdi mdi-logout text-primary"></i>
                                Alterar Complementos
                            </a>
                            <a href="../logout.php" class="dropdown-item">
                                <i class="mdi mdi-logout text-primary"></i>
                                Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>
    </header>

    <section id="about">
        <div class="container">
            <header class="section-header">
                <h3>Olá, <?php echo $_SESSION['address'] ?></h3>
                <br>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <button id="lef" type="button" class="btn btn-info mt-2 mt-xl-0" data-toggle="modal" data-target="#myModalcad">Adicionar Medicamento</button>
                </div>
            </header>
            <br>

            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <input asd type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtre sua Pesquisa...">

                            <div class="table-responsive">
                                <table id="myTable" class="table" data-toggle="table" data-pagination="true" data-search="true" data-url="data.json">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>Medicamento
                                            </th>
                                            </center>
                                            <th>
                                                <center>Descrição
                                            </th>
                                            </center>
                                            <th>
                                                <center>Tipagem
                                            </th>
                                            </center>
                                            <th>
                                                <center>Dosagem
                                            </th>
                                            </center>
                                            <th>
                                                <center>Laboratório
                                            </th>
                                            </center>
                                            <th>
                                                <center>Quantidade
                                            </th>
                                            <th>
                                                <center>Disponibilidade
                                            </th>
                                            <th>
                                                <center>Entrada/Saída
                                            </th>
                                            </center>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            include_once '../conexao.php';
                                            $conn = getConnection();
                                            $result = mysqli_query($conn, "Select * From tbmedicamento m inner join tbtipaggem tp ON m.codTipagem = tp.codTipagem inner join tbdosagem ds ON m.codDosagem = ds.codDosagem inner join tblaboratorio lb ON m.codLaboratorio = lb.codLaboratorio inner join tbmedicamento_ubs mu ON m.codMedicamento = mu.codMedicamento where mu.codUbs =" . $_SESSION["codUbs"] . " ORDER BY m.nomeMedicamento");
                                            while ($linha = mysqli_fetch_array($result)) {
                                                echo "<tr><td><center>" . $linha["nomeMedicamento"] . "</center></td>";
                                                echo "<td><center>" . $linha["descricaoMedicamento"] . "</center></td>";
                                                echo "<td><center>" . $linha["descricaoTipagem"] . "</center></td>";
                                                echo "<td><center>" . $linha["doseMedicamento"] . "</center></td>";
                                                echo "<td><center>" . $linha["nomeLaboratorio"] . "</center></td>";
                                                echo "<td><center>" . $linha["quantidadeMedicamento"] . "</center></td>";
                                                if ($linha["quantidadeMedicamento"] > 0) {
                                                    echo "<td><center>Disponível</center></td>";
                                                } else {
                                                    echo "<td><center>Não disponível</center></td>";
                                                }
                                                echo "<td><center><button type='button' onClick='return beforeModal(" . $linha["codMedicamento"] . ", " . $linha["quantidadeMedicamento"] . ")' class='btn btn-´primary' data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo'><span class='glyphicon glyphicon-plus'></span>🔎</button></center></td>";
                                            }
                                            ?>
                                            <form name="log" action="cadastrarQtde.php" method="post" onsubmit="return validarEntrada()">
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Entre com a quantidade recebida</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">Tipo de entrada:</label>
                                                                        <select id="statusMedicamento" name="statusMedicamento" class="form-control">
                                                                            <option value="1">Entrada</option>
                                                                            <option value="0">Saída</option>
                                                                        </select>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" id="codMedicamento" name="codMedicamento">
                                                                    <input type="hidden" class="form-control" id="quantidadeExistente" name="quantidadeExistente">
                                                                    <label for="recipient-name" class="col-form-label">Quantidade:</label>
                                                                    <input type="text" class="form-control" id="quantidadeMedicamento" name="quantidadeMedicamento">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-info">Confirmar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                            </div>
                        </div>
                        <form name="log" action="senhaUbs.php" method="post">
                            <div class="modal fade" id="modalSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Altere a senha da UBS</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Nova Senha:</label>
                                                <input type="password" class="form-control" id="passUbs" name="passUbs" placeholder="Senha">
                                            </div>


                                            <!-- <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div> -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form name="log" action="insereMedicamento.php" method="post">
                            <div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Adicione um medicamento a unidade...</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label id="lblNomeAgendamento">Medicamento:</label>
                                                <select id="medicamentoCadastrar" name="medicamentoCadastrar" class="form-control">
                                                    <option>Selecione o medicamento a ser cadastrado:</option>
                                                    <?php
                                                    include_once '../conexao.php';
                                                    $conn = getConnection();
                                                    $result = mysqli_query($conn, "Select * From tbMedicamento m where m.codMedicamento not in (select mu.codMedicamento from tbmedicamento_ubs mu where mu.codMedicamento = m.codMedicamento and mu.codUbs = " . $_SESSION['codUbs'] . ") ORDER BY nomeMedicamento");
                                                    while ($linha = mysqli_fetch_array($result)) {
                                                        echo '<option value=' . $linha["codMedicamento"] . '>' . $linha["descricaoMedicamento"] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <br>
                                                <hr>
                                                <label for="recipient-name" class="col-form-label">Quantidade de Entrada:</label>
                                                <input type="text" class="form-control" id="quantidadeMedicamento" name="quantidadeMedicamento">

                                                <span class="glyphicon glyphicon-calendar"></span>



                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-info">Cadastrar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>

</html>