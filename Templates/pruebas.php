<html>

<head>
    <meta charset="utf-8">
    <title>Paises</title>
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <style>
        .slider {
            display: none;
        }
    </style>
</head>

<body>
    <div class="slider"><img src="../img/pageloader.gif"></div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script>
        $(document).load(function() {

            jQuery(function($) {
                // The animation slider cached for readability/performance
                var slider = $(".slider");

                // Arbitrary event
                $("body").bind('click', function() {
                    // Show graphic before ajax
                    slider.show();

                    // Fetch content from PHP
                    $.ajax({
                        type: 'GET',
                        url: '../ajax/ajaxstablaasignatura.php'
                            .done(function(cargar) {
                                $('#dialog-confirm').html(cargar)
                                $("#dialog").dialog({
                                    height: 250,
                                    buttons: {
                                        Aceptar: function() {
                                            cargartabla()
                                            $(this).dialog("close");

                                        }
                                    }
                                })
                            })
                            .fail(function() {
                                alert('Hubo un error al cargar de Perfiles')
                            })
                            .complete(function() {
                                // Hide during complete
                                slider.hide();

                                // Rest of code after request
                            })
                    });
                })
            })
        });
    </script>
</body>

</html>