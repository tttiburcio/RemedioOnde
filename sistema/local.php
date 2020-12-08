<?php
include_once("../verificaLogin.php");
?>
<html>

<head>

    <title>Remédio Onde? - Admin</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="css/qqq.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="shortcut icon" href="../img/cap.png" />

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Chivo" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVgR5QHR8owRn7NEwqZcuRsvQjXJmsvK0&callback=initMap&libraries=places&v=weekly" defer></script>

    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <style type="text/css">
        #map {
            height: 90%;
        }

        /* Optional: Makes the sample page fill the window. */
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
                        <h5 class="mb-md-0">Área do Adm</h5>
                    </li>
                </ul>
                <ul class=" navbar-nav navbar-nav-right">
                    <a href="../logout.php" class="logout"><button type="button" class="btn btn-primary mt-2 mt-xl-0">Logout</button></a>
            </div>
            </li>
            </ul>
    </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
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
                                    <h2>Olá, Admin!</h2>
                                    <h6 class="mb-md-0">Veja as localidaes de UBS disponíveis próximas a você...</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>

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
                            downloadUrl('../result.php', (data) => {
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
</body>

</html>