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

    <title>Funcionario</title>
</head>

<body>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <div style="background-color: #bdbdbd;">
                    <table width="100%">
                        <tr>
                            <td align="left"><img src="img/logo.png" class="img-fluid" alt="Salvaditas"></td>
                            <td align="right">
                                <a href="index.html">
                                    <button type="button" class="btn_cerrarSesion">Regresar</button>
                                </a>
                            </td>
                            <td align="right">
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div style="height: 50px; width: 100%; background-color:#f6695e; text-align: center; line-height: 60px;">
                    <h2 style="color: white;">REGISTRO FUNCIONARIO</h2>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container text-center my-auto">
                    <div class="m-4 d-flex justify-content-center align-items-center">
                        <div class="btn_escanear" >
                            <h1 class="area_escanear">Escanear Gafete</h1>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container text-center my-auto">
                    <div class="m-4 d-flex justify-content-center align-items-center">
                        <form method="post">
                            <!--Campo Cedula-->
                            <div class="input-group input-group-lg">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-id-card mx-3"></i>
                                    Cédula
                                </span>
                                <input type="hidden" name="cedula" value="0" />
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="cedula" name ="cedula">
                            </div>
                            <br>
                            <!-- Btn de Ingresar EntradaSalida de Funcionario -->
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <input type="submit" class="btn_agregar" name="entradasalidafun" value="Registrar">
                            </div>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    
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