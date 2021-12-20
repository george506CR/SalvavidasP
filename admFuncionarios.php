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

    <title>Funcionarios</title>
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
                                <a href="admListaFuncionarios.php">
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
        <h2 style="color: white;">NUEVO FUNCIONARIO</h2>
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
                        <tr>
                            <td>
                                <!--Agregar Horario-->
                                <a href="admHorarios.php" style="text-decoration: none;">
                                    <div class="btn_menuLeft">
                                        <p class="area_menuLeft"><b>Agregar Horario</b></p>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="vertical-align: top;">
                    <div class="container text-center my-auto">
                        <!-- Centrado   -->
                        <div class="m-4 d-flex justify-content-center align-items-center" style="height: 600px;">
                            <div class="col-6">
                                <!--<form action="ingresarVisita.php" method="post">-->
                                <form method="post">
                                    <!--Campo Cedula-->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-id-card mx-3"></i>
                                            Cédula
                                        </span>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="Cedula" name ="Cedula" value="<?php echo $cedula; ?>">
                                    </div>
                                    <br>
                                    <!--Campo Nombre-->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-id-card mx-3"></i>
                                            Nombre
                                        </span>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="nombre" name ="nombre" value="<?php echo $nombre; ?>">
                                    </div>
                                    <br>
                                    <!--Campo pApellido-->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-id-card mx-3"></i>
                                            Primer Apellido
                                        </span>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="pApellido" name ="pApellido" value="<?php echo $pApellido; ?>">
                                    </div>
                                    <br>
                                    <!--Campo sApellido-->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-id-card mx-3"></i>
                                            Segundo Apellido
                                        </span>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="sApellido" name ="sApellido" value="<?php echo $sApellido; ?>">
                                    </div>
                                    <br>
                                    <!--Campo Correo-->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="fas fa-id-card mx-3"></i>
                                            Correo Electronico
                                        </span>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="correo" name ="correo">
                                    </div>
                                    <br>
                                    <!--Agregar Departamento  -->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            Departamento
                                        </span>
                                        <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="Departamento">
                                            <option selected disabled>Seleccionar departamento</option>
                                            <?php
                                                try {
                                                    $sql = "SELECT * FROM departamento";
                                                    foreach ($db->query($sql) as $deptValue) {
                                                        echo "<option value='". $deptValue['dptId']."'>".$deptValue['dptDescripcion']."</option>";
                                                        //$deptSeleccionado = $deptValue['dptId'];
                                                    }
                                                } catch (PDOException $e) {
                                                    echo 'Hay un problema con la conexion ' . $e->getmessage();
                                                }
                                                $database->close();
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <!-- Busca puestos -->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            Puesto
                                        </span>
                                        <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="puesto">
                                            <option selected disabled>Seleccionar puesto</option>
                                            <?php
                                                try {
                                                    $sql = "SELECT pstId, pstPuesto, pstSalario FROM puesto";
                                                    foreach ($db->query($sql) as $puestValue) {
                                                        echo "<option value='".$puestValue['pstId']."'>".$puestValue['pstPuesto'].' - '.$puestValue['pstSalario']."</option>";
                                                    }
                                                } catch (PDOException $e) {
                                                    echo 'Hay un problema con la conexion ' . $e->getmessage();
                                                }
                                                $database->close(); 
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <!-- Busca horarios -->
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="basic-addon1">
                                            Horario
                                        </span>
                                        <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="horario">
                                            <option selected disabled>Seleccionar horario</option>
                                            <?php
                                                try {
                                                    $sql = "SELECT hrrID, hrrHoraEntrada, hrrHoraSalida, hrrNombre, hrrlunes, hrrmartes, hrrmiercoles, hrrjueves, hrrviernes, hrrsabado, hrrdomingo FROM horario";
                                                    foreach ($db->query($sql) as $hrrValue) {
                                                        echo "<option value='".$hrrValue['hrrID']."'>".$hrrValue['hrrHoraEntrada'].' - '.$hrrValue['hrrHoraSalida']." - ";
                                                        if($hrrValue["hrrlunes"]==1){echo "L ";}
                                                        if($hrrValue["hrrmartes"]==1){echo "K ";}
                                                        if($hrrValue["hrrmiercoles"]==1){echo "M ";}
                                                        if($hrrValue["hrrjueves"]==1){echo "J ";}
                                                        if($hrrValue["hrrviernes"]==1){echo "V ";}
                                                        if($hrrValue["hrrsabado"]==1){echo "S ";}
                                                        if($hrrValue["hrrdomingo"]==1){echo "D ";}
                                                        echo "</option>";
                                                    }
                                                } catch (PDOException $e) {
                                                    echo 'Hay un problema con la conexion ' . $e->getmessage();
                                                }
                                                $database->close(); 
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <!-- Cierre de visita -->
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <input type="submit" class="btn_agregar" name ="GuardarFuncionario" value="Ingresar Funcionario">
                                    </div>
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