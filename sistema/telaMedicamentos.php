<html>

<head>
    <meta charset="utf-8">
    <title>RemédioOnde? Busque aqui tudo sobre a sua saúde!</title>
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
                    document.getElementById("doseMedicamento").innerHTML = con_consulta.responseText;
                }
            }

            var tipagem = document.getElementById("tipagemMedicamento").value;

            con_consulta.open("GET", "pesquisaDosagem.php?tipagemMedicamento=" + tipagem, true);
            console.log(con_consulta);
            con_consulta.send(null);
        }
    </script>

    <style type="text/css">
        #left {
            margin-left: 20%;
        }

        #bt {
            margin-left: 30%;
            width: 25%;
            border-radius: 10px;
        }

        #lef {
            border-radius: 10px;
            width: 65%;
        }
    </style>

</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <a href="#intro" class="scrollto"><img src="../img/Logov6.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li><a href="interna.php">Interna</a></li>
                    <li><a href="estoque.php">Estoque</a></li>
                    <li><a href="local.php">Localidades</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Insira os dados do medicamento</h3>
            </header>
            <br>

            <div class="col-lg-11">
                <hr>
                <br>
                <div id="left">
                    <form name="cadastro" method="post" action="cadastraMedicamento.php">
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" name="nomeMedicamento" id="nomeMedicamento" placeholder="Nome Medicamento">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" name="descricaoMedicamento" id="descricaoMedicamento" placeholder="Descrição Medicamento">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <select id="tipagemMedicamento" name="tipagemMedicamento" class="form-control" onchange="return buscaDosagem()">
                                    <option>Tipagem Medicamento:</option>
                                    <?php
                                    include_once '../conexao.php';
                                    $conn = getConnection();
                                    $result = mysqli_query($conn, "Select * From tbtipaggem ORDER BY descricaoTipagem");
                                    while ($linha = mysqli_fetch_array($result)) {
                                        echo '<option value=' . $linha["codTipagem"] . '>' . $linha["descricaoTipagem"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <select id="doseMedicamento" name="doseMedicamento" class="form-control">
                                    <option>Dosagem Medicamento:</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <select id="laboratorioMedicamento" name="laboratorioMedicamento" class="form-control">
                                    <option>Laboratódio de Fabricação :</option>
                                    <?php
                                    include_once '../conexao.php';
                                    $conn = getConnection();
                                    $result = mysqli_query($conn, "Select * From tblaboratorio ORDER BY nomeLaboratorio");
                                    while ($linha = mysqli_fetch_array($result)) {
                                        echo '<option value=' . $linha["codLaboratorio"] . '>' . $linha["nomeLaboratorio"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <button id="lef" type="button" class="btn btn-info mt-2 mt-xl-0" data-toggle="modal" data-toggle='modal' data-target='#modalSenha' data-whatever='@mdo'>Adicionar</button>
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                        <br>
                        <button id="bt" type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <form name="log" action="insereLaboratorio.php" method="post">
            <div class="modal fade" id="modalSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Insira um novo Laboratório...</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Novo laboratório:</label>
                                <input type="text" class="form-control" id="nomeLab" name="nomeLab" placeholder="Nome do laboratório">
                            </div>
                            <hr>
                            <label for="recipient-name" class="col-form-label">CNPJ laboratório:</label>
                            <input type="text" class="form-control" id="cnpjLab" name="cnpjLab" placeholder="CNPJ">


                            <!-- <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="Jquery/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cnpjLab').mask('00.000.000/0000-00');
        });
    </script>
</body>

</html>