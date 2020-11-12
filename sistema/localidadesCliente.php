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


    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVgR5QHR8owRn7NEwqZcuRsvQjXJmsvK0&callback=initMap&libraries=places&v=weekly" defer></script>


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

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

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
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <br><br>
                <li class="nav-item">
                    <a class="nav-link" href="internaCliente.php">
                        <img src="img/pac.png" class="minimg">
                        <span class="menu-title">⠀⠀Informações</span>
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
                                    <h2>Olá,<?php echo $_SESSION['nomeCliente'] ?></h2>
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
                        const map = new google.maps.Map(document.getElementById("map"), {
                            center: {
                                lat: -23.552994,
                                lng: -46.399620,
                            },
                            zoom: 18,
                        });

                        // Change this depending on the name of your PHP or XML file
                        downloadUrl('result.php', (data) => {
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
                        const marker = new google.maps.Marker({
                            map: map,
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
                    <input id="pac-input" class="controls" type="text" placeholder="Enter a location" />
                </div>
                <div id="map"></div>
                <div id="infowindow-content">
                    <span id="place-name" class="title"></span><br />
                    <strong>Place ID:</strong> <span id="place-id"></span><br />
                    <span id="place-address"></span>
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


    <link type="text/css" rel="stylesheet" href="DataPicker/css/bootstrap-datepicker.css">
    <script type="text/javascript" src="DataPicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="DataPicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    <script type="text/javascript" src="Jquery/jquery.mask.min.js"></script>

</body>

</html>