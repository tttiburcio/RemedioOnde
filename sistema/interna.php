<?php
include_once("../verificaLogin.php");
?>
<html>

<head>

    <title>Remédio Onde? - Admin</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">

    <link rel="stylesheet" href="css/qqq.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="shortcut icon" href="../img/cap.png" />

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Chivo" rel="stylesheet">

    <script type="text/javascript" src="Jquery/ajax.js"></script>
    <script type="text/javascript" src="Jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Jquery/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="Jquery/Jquery.js"></script>
    <script type="text/javascript" src="Jquery/javascript.js"></script>
    <script type="text/javascript" src="Jquery 1.5.2.js"></script>
    <script type="text/javascript" src="bs/jquery3.2.1.js"></script>
    <script type="text/javascript" src="Jquery/jquery.mask.min.js"></script>
    <script type="text/javascript" src="Jquery/post.js"></script>
    <script type="text/javascript" src="bs/js/select2.min.js"></script>
    <script type="text/javascript" src="DataPicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="DataPicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="Dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="Dist/sweetalert.css">

</head>

<style>
    .container {
        position: relative;
    }

    #image {
        position: absolute;
        width: 116.6%;
        left: -9%;
        height: 150%;
    }

    #texto {
        position: absolute;
        font-size: 16px;
        left: 2%;
        top: 60%;
    }

    #servico {
        width: 140px;
        height: 30px;
        font-size: 15px;
        text-align: center;
    }

    #medic {
        position: absolute;
        width: 5%;
        left: 50%;
        top: 38%;
        height: 5%;
    }

    #medico {
        width: 225px;
        height: 30px;
        font-size: 15px;
        text-align: center;
    }

    #CampoSevicosAgendamento {
        width: 190px;
        height: 40px;
        font-size: 15px;
        text-align: center;
    }

    #CampoSevicosAgendamentoEditar {
        width: 190px;
        height: 40px;
        font-size: 15px;
        text-align: center;
    }

    #campoPesquisaData {
        width: 180px;
        height: 42px;
        margin-left: -3%;
        font-size: 15px;
    }

    #campoPesquisaDataEditar {
        width: 180px;
        height: 42px;
        margin-left: -3%;
        font-size: 15px;
    }

    #lblPesquisaData {
        margin-left: -3%;
    }

    #horac {
        position: absolute;
        width: 40%;
        left: 50%;
        top: 0%;
        height: 5%;
    }

    #HorarioConsulta {
        position: absolute;
        width: 45%;
        left: 50%;
        top: 34%;
        height: 44%;
    }

    #selectMedico {
        position: absolute;
        width: 45%;
        left: 50%;
        top: 34%;
        height: 10%;
    }

    #selectMedicoEditar {
        position: absolute;
        width: 45%;
        left: 50%;
        top: 34%;
        height: 10%;
    }

    #lblselect {
        margin-left: 50%;
        margin-top: -15%;
    }

    #esc {
        position: absolute;
        font-family: 'Bree Serif', serif;
        font-size: 25px;
        margin-top: -1%;
        color: #4D83FF;
    }
</style>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <img src="../img/Logov6.png" class="img-fluid">
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-4 w-100">
                    <li class="nav-item nav-search d-none d-lg-block w-100">
                        <h6 class="mb-md-0"></h6>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <a href="../logout.php" class="logout"><button type="button" class="btn btn-primary mt-2 mt-xl-0">Logout</button></a>
            </div>
            </li>
            </ul>
    </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <br><br>
                <li class="nav-item">
                    <a class="nav-link" href="interna.php">
                        <img src="img/pac.png" class="minimg">
                        <span class="menu-title">⠀⠀Informações</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="telaMedicamentos.php">
                        <img src="img/cap.png" class="minimg">
                        <span class="menu-title">⠀⠀Medicações</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estoque.php">
                        <img src="img/cap.png" class="minimg">
                        <span class="menu-title">⠀⠀Estoque</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="local.php">
                        <img src="img/pac.png" class="minimg">
                        <span class="menu-title">⠀⠀Localidades</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                                <div class="mr-md-3 mr-xl-5">
                                    <h2>Olá, Área do Admin!</h2>
                                    <h6 class="mb-md-0">Veja as novas informações de reportes disponíveis...</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p id="Agendamentos" class="card-title"></p>
                                <div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edite uma Consulta...</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="seila" id="seila"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>

    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>

    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link type="text/css" rel="stylesheet" href="DataPicker/css/bootstrap-datepicker.css">
    <script type="text/javascript" src="DataPicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="DataPicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    <script type="text/javascript" src="Jquery/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#campoPesquisaData').mask('0000/00/00');
            $('#campoPesquisaDataEditar').mask('0000/00/00');
        });
    </script>
    <script>
        $('#campoPesquisaData').datepicker({
            format: 'yyyy/mm/dd',
            language: "pt-BR",
            startDate: "0d",
        });
    </script>
    <script>
        $('#campoPesquisaDataEditar').datepicker({
            format: 'yyyy/mm/dd',
            language: "pt-BR",
            startDate: "0d",
        });
    </script>
</body>

</html>