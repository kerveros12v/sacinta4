<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provincias</title>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />

    <script type="text/javascript" src="../js/ajaxstemp.js"></script>
    <link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(document).ready(function() {
                $('.selector').select2();
            });
        });
    </script>
</head>

<body>
    <form id='form1'>
        <table>
            <tr>
                <td>
                    <table>
                        <tr id=new_perfil>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            Codigo del Nuevo Perfil:
                                        </td>
                                        <td>
                                            <input type="text" id="perfilacceso" name="perfilacceso" value="" />
                                        </td>
                                        <td>
                                            <input type="button" value="Crear" id="btnguardar" class="btnunico" onclick="nuevoperfil()"> </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                        <tr id=select_perfil>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            Seleccione el Perfil a configurar:
                                        </td>
                                        <td>
                                            <select class="selector" id="perfilselect" name="perfilselect"></select>
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
                    <table id=contenedortemp>

                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>