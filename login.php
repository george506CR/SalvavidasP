<!doctype html>
<html lang="en">
<?php include('busqueda.php');?>

<head>
    <link rel="stylesheet" href="botonesStyle.css">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/">

    <title>Administrador</title>
</head>

<body style="background-color: #e0e0e0;">
    <div class="container">
        <!-- Centrado   -->
        <div class="border m-4 d-flex justify-content-center align-items-center">
            <div class="col-6">
                <!-- Ingreso de número de cédula -->
                <img src="img/logo.png" class="img-fluid" alt="Salvaditas">
                <form method="post">
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="basic-addon1">
                            Correo electrónico
                        </span>
                        <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="correo" name ="correo">
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="basic-addon1">
                            Contraseña
                        </span>
                        <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="contrasena" name ="contrasena">
                    </div>
                    <br>
                    <div>
                        <table>
                            <tr>
                                <td>
                                    <a href="index.html">
                                        <input style="width: 100px;" type="button" class="btn_regresar" value="Regresar">
                                    </a>
                                </td>
                                <td></td>
                                <td>
                                    <input style="width: 100px;" type="submit" class="btn_ingresar" name="loginIngresar" value="Ingresar">
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Dependdencia de icononos -->
    <script src="https://kit.fontawesome.com/aa1aae703a.js" crossorigin="anonymous"></script>
</body>

</html>