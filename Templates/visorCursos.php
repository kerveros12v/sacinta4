<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parroquias</title>
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <link href="../vendor/select2/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../vendor/select2/select2/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="../js/ajaxsCursos.js"></script>
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
                                            Seleccione la Institucion:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="instituto" name="instituto"></select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <!-- //idCursos, cursoscodigo, , fkparaleloId, , , cursosOculto, cursosAccion, cursosfecha, cursosuser
    -->
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Seleccione la Carrera:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="fkcarrerasId" name="fkcarrerasId"></select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Seleccione el Jornada Academica:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="fkjJornadaAcademicaId" name="fkjJornadaAcademicaId"></select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Seleccione el Periodo Academico:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="fkperiodo" name="fkperiodo"></select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Seleccione el Nivel Academico:
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="selector" id="fknivelAcademicoQueCursaId" name="fknivelAcademicoQueCursaId"></select>
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
                    <table id=contenedorcursos>

                    </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>