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

    <title>Visitas</title>
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
                                <a href="admin.php">
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
        <h2 style="color: white;">VISITAS</h2>
    </div>
    <div class="container text-center my-auto">
        <div class="m-4 d-flex justify-content-center align-items-center">
            <!--Exportar Visitas-->
            <a href="dumpListaVisitas.php" target="_blank" style="color: #f6695e; ">
                <button type="button" class="btn_agregar">Exportar Visitas</button>
            </a>
        </div>
    </div>
    <div class="container text-center my-auto">
        <div class="m-4 d-flex justify-content-center align-items-center">
            <?php
                echo "<table width=\"100%\" style=\"border-collapse: separate;\">
                    <tr>
                        <th style=\"border: 1px solid #ff7f50;\">Nombre Completo</th>
                        <th style=\"border: 1px solid #ff7f50;\">Funcionario</th>
                        <th style=\"border: 1px solid #ff7f50;\">Departamento</th>
                        <th style=\"border: 1px solid #ff7f50;\">Fecha</th>
                        <th style=\"border: 1px solid #ff7f50;\">Hora de Entrada</th>
                        <th style=\"border: 1px solid #ff7f50;\">Hora de Salida</th>
                    </tr>";
                $sql = "SELECT v.vstId,v.vstIdPerona,p.psrNombre AS nombreVisita,p.psrPrimerApellido AS pApVisita,p.psrSegundoApellido AS sApVisita,v.vstIdFuncionario,f.fncIdPersona,fp.psrNombre  AS nombreFun,fp.psrPrimerApellido AS pApFun,
                fp.psrSegundoApellido AS sApFun,v.vstIdDepartamento, d.dptDescripcion,v.vstHoraEntrada,v.vstFecha,v.vstHorSalida
                FROM visitas v
                JOIN persona p ON v.vstIdPerona=p.psrID
                JOIN funcionario f ON v.vstIdFuncionario=f.fncId
                JOIN persona fp ON f.fncIdPersona=fp.psrID
                JOIN departamento d ON v.vstIdDepartamento=d.dptId";
                foreach ($db->query($sql) as $row) {
                    $vstHoraEntradaDB = $row["vstHoraEntrada"];
                    $vstHoraEntradaDBFormated = date('Y-m-d h:i:s A', strtotime($vstHoraEntradaDB));
                    $vstHorSalidaDB = $row["vstHorSalida"];
                    if($vstHorSalidaDB == NULL){
                        $vstHorSalidaDBFormated = '';
                    }else{
                        $vstHorSalidaDBFormated = date('Y-m-d h:i:s A', strtotime($vstHorSalidaDB));
                    }
                    echo "<tr>
                        <td style=\"border: 1px solid #ff7f50;\">".$row["nombreVisita"]." ".$row["pApVisita"]." ".$row["sApVisita"]."</td>
                        <td style=\"border: 1px solid #ff7f50;\">".$row["nombreFun"]." ".$row["pApFun"]." ".$row["sApFun"]."</td>
                        <td style=\"border: 1px solid #ff7f50;\">".$row["dptDescripcion"]."</td>
                        <td style=\"border: 1px solid #ff7f50;\">".$row["vstFecha"]."</td>
                        <td style=\"border: 1px solid #ff7f50;\">".$vstHoraEntradaDBFormated."</td>
                        <td style=\"border: 1px solid #ff7f50;\">".$vstHorSalidaDBFormated."</td>
                    </tr>";
                }
                echo "</table>";
            ?>
        </div>
    </div>
    <div class="col-6" style="height: 50px; width: 100px;"></div>
    
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