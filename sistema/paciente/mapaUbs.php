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

        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVgR5QHR8owRn7NEwqZcuRsvQjXJmsvK0&callback=initMap&libraries=places&v=weekly" defer></script>

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <style type="text/css">
            #map {
                height: 320%;
                margin-left: 2%;
            }

            html,
            body {
                height: 100%;
                margin: 0;
                padding: 0;
            }

            .controls {
                background-color: #fff;
                border-radius: 2px;
                border: 1px solid transparent;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
                box-sizing: border-box;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                height: 29px;
                margin-left: 17px;
                margin-top: 10px;
                outline: none;
                padding: 0 11px 0 13px;
                text-overflow: ellipsis;
                width: 400px;
            }

            .controls:focus {
                border-color: #4d90fe;
            }

            .title {
                font-weight: bold;
            }

            #infowindow-content {
                display: none;
            }

            #map #infowindow-content {
                display: inline;
            }
        </style>

        <style>
            #dwn {
                width: 95.5%;
                margin-left: 3%;
            }

            #mapa {
                width: 115%;

            }
        </style>

        <script>
            function getLocation() {
                return new Promise((resolve, reject) => {
                    if ('geolocation' in navigator) {
                        const watcher = navigator.geolocation.watchPosition(function(position) {
                            return resolve(position.coords);
                        }, function(error) {
                            console.log(error)
                            return reject(error);
                        }, {
                            enableHighAccuracy: true,
                            maximumAge: 30000,
                            timeout: 30000
                        })
                    } else {
                        alert('ops, não foi possível pegar sua localização!');
                        return reject();
                    }
                });
            }
        </script>

    </head>



<body class="animsition">

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
                                        <i class="far fa-check-square"></i>Localidade UBS's</a>
                                </li>
                                <li>
                                    <a href="internaCliente.php">
                                        <i class="fas fa-copy"></i>Informações</a>
                                </li>
                                <li>
                                    <a href="medicamentosCliente.php">
                                        <i class="fas fa-table"></i>Medicamentos</a>
                                </li>

                                <li>
                                    <a href="rotas.php">
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
                                <i class="far fa-check-square"></i>Localidade UBS's</a>
                        </li>
                        <li>
                            <a href="internaCliente.php">
                                <i class="fas fa-copy"></i>Informações</a>
                        </li>
                        <li>
                            <a href="medicamentosCliente.php">
                                <i class="fas fa-table"></i>Medicamentos</a>
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
                <div class="section__content section__content">
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- MAP DATA-->
                            <div class="map-data">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-map"></i>Buscar - UBS mais próxima</h3>
                                <script>
                                    "use strict";

                                    var customLabel = {
                                        restaurant: {
                                            label: 'R'
                                        },
                                        bar: {
                                            label: 'B'
                                        }
                                    };

                                    function initMap() {
                                        getLocation().then((resp) => {
                                            const map = new google.maps.Map(document.getElementById("map"), {
                                                center: {
                                                    lat: resp.latitude,
                                                    lng: resp.longitude,
                                                },
                                                zoom: 18,
                                            });

                                            // Change this depending on the name of your PHP or XML file
                                            downloadUrl('../../result.php', (data) => {
                                                var xml = data.responseXML;
                                                var markers = xml.documentElement.getElementsByTagName('marker');
                                                Array.prototype.forEach.call(markers, function(markerElem) {
                                                    var name = markerElem.getAttribute('name');
                                                    var address = markerElem.getAttribute('address');
                                                    var type = markerElem.getAttribute('type');
                                                    var point = new google.maps.LatLng(
                                                        parseFloat(markerElem.getAttribute('lat')),
                                                        parseFloat(markerElem.getAttribute('lng')));

                                                    var infowincontent = document.createElement('div');
                                                    var strong = document.createElement('strong');
                                                    strong.textContent = name
                                                    infowincontent.appendChild(strong);
                                                    infowincontent.appendChild(document.createElement('br'));

                                                    var text = document.createElement('text');
                                                    text.textContent = address
                                                    infowincontent.appendChild(text);
                                                    var icon = customLabel[type] || {};
                                                    var marker = new google.maps.Marker({
                                                        map: map,
                                                        position: point,
                                                        label: icon.label
                                                    });
                                                    marker.addListener('click', function() {
                                                        infoWindow.setContent(infowincontent);
                                                        infoWindow.open(map, marker);
                                                    });
                                                });
                                            });


                                            const input = document.getElementById("pac-input");
                                            const autocomplete = new google.maps.places.Autocomplete(input);
                                            autocomplete.bindTo("bounds", map); // Specify just the place data fields that you need.

                                            autocomplete.setFields(["place_id", "geometry", "name"]);
                                            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                                            const infowindow = new google.maps.InfoWindow();
                                            const infowindowContent = document.getElementById("infowindow-content");
                                            infowindow.setContent(infowindowContent);
                                            var currentPoint = new google.maps.LatLng(
                                                parseFloat(resp.latitude),
                                                parseFloat(resp.longitude));
                                            const marker = new google.maps.Marker({
                                                map: map,
                                                position: currentPoint,
                                            });
                                            marker.addListener("click", () => {
                                                infowindow.open(map, marker);
                                            });
                                            autocomplete.addListener("place_changed", () => {
                                                infowindow.close();
                                                const place = autocomplete.getPlace();

                                                if (!place.geometry) {
                                                    return;
                                                }

                                                if (place.geometry.viewport) {
                                                    map.fitBounds(place.geometry.viewport);
                                                } else {
                                                    map.setCenter(place.geometry.location);
                                                    map.setZoom(17);
                                                } // Set the position of the marker using the place ID and location.

                                                marker.setPlace({
                                                    placeId: place.place_id,
                                                    location: place.geometry.location,
                                                });
                                                marker.setVisible(true);
                                                infowindowContent.children.namedItem("place-name").textContent =
                                                    place.name;
                                                infowindowContent.children.namedItem("place-id").textContent =
                                                    place.place_id;
                                                infowindowContent.children.namedItem("place-address").textContent =
                                                    place.formatted_address;
                                                infowindow.open(map, marker);
                                            });
                                        })
                                    }



                                    function downloadUrl(url, callback) {
                                        var request = window.ActiveXObject ?
                                            new ActiveXObject('Microsoft.XMLHTTP') :
                                            new XMLHttpRequest;

                                        request.onreadystatechange = function() {
                                            if (request.readyState == 4) {
                                                request.onreadystatechange = doNothing;
                                                callback(request, request.status);
                                            }
                                        };

                                        request.open('GET', url, true);
                                        request.send(null);
                                    }

                                    function doNothing() {}
                                </script>

                                <div style="display: none">
                                    <input id="pac-input" class="controls" type="text" placeholder="Procure pelo endereço dedejado..." />
                                </div>
                                <div id="map"></div>
                                <div id="infowindow-content">
                                    <span id="place-name" class="title"></span><br />
                                    <strong>
                                        <center>
                                            <h5>Sua Localização</h5>
                                        </center>
                                        <!-- include_once '../conexao.php';
                            $conn = getConnection();
                            $result = mysqli_query($conn, "Select name From markers WHERE codUbs = 4");
                            while ($linha = mysqli_fetch_array($result)) {
                                echo '<strong value=' . $linha["codUbs"] . '>' . $linha["name"] . '</strong>';
                            } -->
                                    </strong>Rua Flôr de Cachimbo, 62 - Jardim Santana, São Paulo - SP, Brasil<span id="place-id"></span><br />
                                    <span id="place-address"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <p>Um produto <a href="http://tccessence.myartsonline.com/" target="_blank">ESSENCE</a> © 2020 para você! </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    <script src="vendor/vector-map/jquery.vmap.brazil.js"></script>
    <script src="vendor/vector-map/jquery.vmap.europe.js"></script>
    <script src="vendor/vector-map/jquery.vmap.france.js"></script>
    <script src="vendor/vector-map/jquery.vmap.germany.js"></script>
    <script src="vendor/vector-map/jquery.vmap.russia.js"></script>
    <script src="vendor/vector-map/jquery.vmap.usa.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->