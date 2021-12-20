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

    <title>Inicio</title>
</head>

<body style>
    <div style="background-color: #bdbdbd;">
        <table width="100%">
            <tr>
                <td align="left"><img src="img/logo.png" class="img-fluid" alt="Salvaditas"></td>
                <td align="right">
                    <a href="index.html">
                        <button type="button" class="btn_cerrarSesion">Cerrar Sesión</button>
                    </a>
                </td>
                <td align="right">
                    <p>&nbsp;</p>
                </td>
            </tr>
        </table>
    </div>
    <div style="height: 50px; width: 100%; background-color:#f6695e; text-align: center; line-height: 60px;">
        <h2 style="color: white;">INICIO</h2>
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
                                <div class="col-6" style="height: 20px; width: 250px;">
                                    <div style="height: 20px; width: 250px;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Ver Visitas  -->
                                <a href="admVisitas.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Visitas</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Ver Funcionarios  -->
                                <a href="admListaFuncionarios.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Funcionarios</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Lista Funcionarios  -->
                                <a href="admListaDepartamentos.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Departamentos</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Lista Puestos  -->
                                <a href="admListaPuestos.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Puestos</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Lista Horarios  -->
                                <a href="admListaHorarios.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Horarios</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--Lista EntradasSalidas-->
                                <a href="admListaEntradasSalidas.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Entradas y Salidas</b></p>
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
                                <img src="img/logo.png" class="img-fluid" alt="Salvaditas">
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