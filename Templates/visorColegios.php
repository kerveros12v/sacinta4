<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parroquias</title>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css"/>

        <script type="text/javascript" src="../js/ajaxsColegios.js"></script>
        <link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($){
            $(document).ready(function() {
                $('.selector').select2();
            });
        });
</script>
</head>
<body>
    <form>
        <table >
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
                                            <select class="selector"  id="paisColegio" name="paisColegio"></select>
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
                                            <select class="selector"  id="provinciaColegio" name="provinciaColegio"></select>
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
                                            <select class="selector"  id="cantonColegio" name="cantonColegio"></select>
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
                    <table id=contenedorColegios >

                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>