<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parroquias</title>
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
    <script type="text/javascript" src="../vendor/components/jquery/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
    <link href="../vendor/components/jqueryui/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="../vendor/components/jqueryui/jquery-ui.min.js"></script>
    <link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="../js/ajaxsparroquia.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(document).ready(function() {
                $('.selector').select2();
            });
        });
    </script>
</head>

<body>
    <div id="dialog" style="display: none;" title="Respuesta del servidor">
        <p id="dialog-confirm"></p>
    </div>
    <form>
        <table>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Seleccione el Pais:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="paisparroquia" name="paisparroquia"></select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Seleccione la Provincia:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="provinciaparroquia" name="provinciaparroquia"></select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Seleccione el Canton:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="cantonparroquia" name="cantonparroquia"></select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>

            </tr>
            <tr>
                <td>
                    <table id=contenedorparroquia>

                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>