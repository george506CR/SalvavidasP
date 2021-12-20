<!doctype html>
<html lang="en">
<?php include('busqueda.php');?>

<head>
<link rel="stylesheet" href="botonesStyle.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/">

    <title>Horarios</title>
</head>

<body>
    <div style="background-color: #bdbdbd; boder:none;">
        <table width="100%">
            <tr>
                <td align="left"><img src="img/logo.png" class="img-fluid" alt="Salvaditas"></td>
                <td align="right">
                    <table>
                        <tr>
                            <td>
                                <a href="index.html">
                                    <button type="button" class="btn_cerrarSesion">Cerrar Sesión</button>
                                </a>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <a href="admListaHorarios.php">
                                    <button type="button" class="btn_cerrarSesion" style="width: 102px;">Regresar</button>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div style="height: 50px; width: 100%; background-color:#f6695e; text-align: center; line-height: 60px;">
        <h2 style="color: white;">NUEVO HORARIO</h2>
    </div>
    <div>
        <table width="100%">
            <tr>
                <td style="height: 20px; width: 250px; background-color: #333333; vertical-align: top;"></td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 600px; width: 250px; background-color: #333333; vertical-align: top;">
                    <table>
                        <tr>
                            <td>
                                <!--Inicio-->
                                <a href="admin.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Inicio</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Agregar Funcionario-->
                                <a href="admFuncionarios.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Agregar Funcionario</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Agregar Departamento-->
                                <a href="admDepartamento.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Agregar Departamento</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Agregar Puesto-->
                                <a href="admPuestos.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Agregar Puesto</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="vertical-align: top;">
                    <div class="container text-center my-auto">
                        <!-- Centrado   -->
                        <div class="m-4 d-flex justify-content-center align-items-center">
                            <div class="col-6">
                                <form method="post">
                                    <table align="center">
                                        <tr>
                                            <td colspan="3">
                                                <!--Campo Nombre-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Nombre
                                                    </span>
                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="nombre" name ="nombre">
                                                </div>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <!--Campo HoraEntrada-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Hora Entrada
                                                    </span>
                                                    <input type="time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="horaEntrada" name ="horaEntrada">
                                                </div>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <!--Campo HoraSalida-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Hora Salida
                                                    </span>
                                                    <input type="time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="horaSalida" name ="horaSalida">
                                                </div>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <!--Campo Lunes-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Lunes&nbsp;
                                                    </span>
                                                    <input type="hidden" name="lunes" value="0" />
                                                    <input type="checkbox" style="width: 52px; height: 52px;" id="lunes" name ="lunes" value="1">
                                                </div>
                                                <br>
                                            </td>
                                            <td>
                                                <!--Campo Martes-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Martes&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </span>
                                                    <input type="hidden" name="martes" value="0" />
                                                    <input type="checkbox" style="width: 52px; height: 52px;" id="martes" name ="martes" value="1">
                                                </div>
                                                <br>
                                            </td>
                                            <td>
                                                <!--Campo Miercoles-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Miercoles
                                                    </span>
                                                    <input type="hidden" name="miercoles" value="0" />
                                                    <input type="checkbox" style="width: 52px; height: 52px;" id="miercoles" name ="miercoles" value="1">
                                                </div>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--Campo Jueves-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Jueves
                                                    </span>
                                                    <input type="hidden" name="jueves" value="0" />
                                                    <input type="checkbox" style="width: 52px; height: 52px;" id="jueves" name ="jueves" value="1">
                                                </div>
                                                <br>
                                            </td>
                                            <td>
                                                <!--Campo Viernes-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Viernes&nbsp;&nbsp;&nbsp;
                                                    </span>
                                                    <input type="hidden" name="viernes" value="0" />
                                                    <input type="checkbox" style="width: 52px; height: 52px;" id="viernes" name ="viernes" value="1">
                                                </div>
                                                <br>
                                            </td>
                                            <td>
                                                <!--Campo Sabado-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Sabado&nbsp;&nbsp;&nbsp;
                                                    </span>
                                                    <input type="hidden" name="sabado" value="0" />
                                                    <input type="checkbox" style="width: 52px; height: 52px;" id="sabado" name ="sabado" value="1">
                                                </div>
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <!--Campo Domingo-->
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        Domingo
                                                    </span>
                                                    <input type="hidden" name="domingo" value="0" />
                                                    <input type="checkbox" style="width: 52px; height: 52px;" id="domingo" name ="domingo" value="1">
                                                </div>
                                                <br>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <!-- Cierre-->
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <input type="submit" class="btn_agregar" name ="guardarHorario" value="Ingresar Horario">
                                                </div>
                                                <br>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </form>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="busquedacedula.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Dependdencia de icononos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/aa1aae703a.js" crossorigin="anonymous"></script>
</body>

</html>