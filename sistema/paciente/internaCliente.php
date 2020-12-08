<?php
include_once("../../verificaLogin.php");
?>
<html>

<head>

    <html>

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Remédio Onde? - Admin</title>
        <link rel="shortcut icon" href="../../img/cap.png" />
        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">

        <style>
            #dwn {
                width: 80%;
                margin-left: 5%;
            }
        </style>

    </head>

<body class="animsition">
    <script>
        if ('geolocation' in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log(position)
            }, function(error) {
                console.log(error)
            })
        } else {
            alert('ops, não foi possível pegar sua localização!')
        }
    </script>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">

                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <nav class="navbar-sidebar">
                            <ul class="list-unstyled navbar__list">
                                <li class="active has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-tachometer-alt"></i>Informações</a>
                                </li>
                                <li>
                                    <a href="medicamentosCliente.php">
                                        <i class="fas fa-table"></i>Medicamentos</a>
                                </li>
                                <li>
                                    <a href="mapaUbs.php">
                                        <i class="fas fa-map-marker-alt"></i>Localidade UBS's</a>
                                </li>
                                <li>
                                    <a href="rotasMedicamento.php">
                                        <i class="fas fa-map-marker-alt"></i>Rotas Medicamentos</a>
                                </li>
                            </ul>
                        </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../../img/Logov6.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Informações</a>
                        </li>
                        <li>
                            <a href="medicamentosCliente.php">
                                <i class="fas fa-table"></i>Medicamentos</a>
                        </li>
                        <li>
                            <a href="mapaUbs.php">
                                <i class="fas fa-map-marker-alt"></i>Localidade UBS's</a>
                        </li>
                        <li>
                            <a href="rotas.php">
                                <i class="fas fa-map-marker-alt"></i>Rotas Medicamentos</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <h4>Área do Paciente</h4>
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['nomeCliente'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="fas fa-copy"></i>Cadastre seu endereço</a>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../../logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">informações gerais</h2>
                                    <button class="au-btn au-btn-icon au-btn">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Atualizações Medicamentos</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--red"></span>
                                                    <span>Medicamentos</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">

                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">Estoque</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <a href="#">
                                                <img src="images/dwn.svg" id="dwn" data-toggle='modal' data-target='#modalMedicamentos' data-whatever='@mdo' class="dropdown-item">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Atualizações Unidades</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--green"></span>
                                                    <span>Postos de saúde</span>
                                                </div>
                                            </div>
                                            <div class="chart-info__right">

                                                <div class="chart-statis mr-0">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>10%</span>
                                                    <span class="label">UBS's</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="percent-chart">
                                            <a href="mapaUbs.php">
                                                <img src="images/map.svg" id="map" data-toggle='modal' data-target='#modalLocalidades' data-whatever='@mdo' class="dropdown-item">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="title-1 m-b-25">Novos Medicamentos Disponíveis</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>nome</th>
                                        <th>tipagem</th>
                                        <th>dose</th>
                                        <th>laboratório</th>
                                        <th>Rotas</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        include_once '../../conexao.php';
                                        $conn = getConnection();
                                        $result = mysqli_query($conn, "Select * From tbmedicamento m inner join tbtipaggem tp ON m.codTipagem = tp.codTipagem inner join tbdosagem ds ON m.codDosagem = ds.codDosagem inner join tblaboratorio lb ON m.codLaboratorio = lb.codLaboratorio WHERE m.nomeMedicamento LIKE '%a' ORDER BY m.nomeMedicamento");
                                        while ($linha = mysqli_fetch_array($result)) {
                                            echo "<tr><td>" . $linha["nomeMedicamento"] . "</td>";
                                            echo "<td>" . $linha["descricaoTipagem"] . "</td>";
                                            echo "<td>" . $linha["doseMedicamento"] . "</td>";
                                            echo "<td>" . $linha["nomeLaboratorio"] . "</td>";
                                            echo "<td><a href=rotas.php?>⠀⠀📍</td></tr>";
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Um produto <a href="http://tccessence.myartsonline.com/" target="_blank">ESSENCE</a> © 2020 para você! </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

    <div class="modal fade bd-example-modal-lg" id="modalMedicamentos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estoque em queda...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Medicamentos Indisponíveis:</label>
                        <div class="table-responsive">
                            <table id="recent-purchases-listing" class="table">
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
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                        include_once '../../conexao.php';
                                        $conn = getConnection();
                                        $result = mysqli_query($conn, "Select * From tbmedicamento m inner join tbtipaggem tp ON m.codTipagem = tp.codTipagem inner join tbdosagem ds ON m.codDosagem = ds.codDosagem inner join tblaboratorio lb ON m.codLaboratorio = lb.codLaboratorio WHERE m.nomeMedicamento LIKE '%n' ORDER BY m.nomeMedicamento");
                                        while ($linha = mysqli_fetch_array($result)) {
                                            echo "<tr><td><center>" . $linha["nomeMedicamento"] . "</center></td>";
                                            echo "<td><center>" . $linha["descricaoMedicamento"] . "</center></td>";
                                            echo "<td><center>" . $linha["descricaoTipagem"] . "</center></td>";
                                            echo "<td><center>" . $linha["doseMedicamento"] . "</center></td>";
                                            echo "<td><center>" . $linha["nomeLaboratorio"] . "</center></td>";
                                        }
                                        ?>




                                    </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    </script>
    <script src="vendor/animsition/animsition.min.js"></script>
    </script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->