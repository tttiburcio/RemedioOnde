<?php
include_once("../../verificaLogin.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Remédio Onde? - Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <h3> teste</h3>

    <select name="" class="selectjs form-control" id="">
        <option value=""></option>
    </select>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".selectjs").select2({
                placeholder: "Entre com o nome do medicamento desejado...⠀⠀⠀",
                minimumInputLength: 2,
                ajax: {
                    url: "getMedicamentos.php",
                    dataType: "json",
                    type: "GET",
                    delay: 250,
                    data: function(params) {
                        console.log(params.term)
                        return {
                            q: params.term,
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });
        });
    </script>

</body>

</html>