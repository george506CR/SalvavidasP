<?php
include('conexion.php');
$database = new ConectarBD();
$db = $database->open();
//Fecha y hora de hoy
$unixTime = time();
$timeZone = new \DateTimeZone('America/Costa_Rica');

$time = new \DateTime();
$time->setTimestamp($unixTime)->setTimezone($timeZone);

$formattedDateTime = $time->format('Y-m-d H:i:s');
$formattedDate = $time->format('Y-m-d');
//echo $formattedTime;

//Variables
$ValorBuscar = '';

$idP = 0;
$cedula = '';
$nombre = '';
$pApellido = '';
$sApellido = '';


if(isset($_POST["BuscarPersona"])){
    try {
        $ValorBuscar = $_POST["Cedula"];

        $sql = "SELECT * FROM persona WHERE psrCedula='$ValorBuscar'";
        foreach ($db->query($sql) as $row) {
            $idP = $row['psrID'];
            $cedula = $row['psrCedula'];
            $nombre = $row['psrNombre'];
            $pApellido = $row['psrPrimerApellido'];
            $sApellido = $row['psrSegundoApellido'];
        }

    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}


if(isset($_POST['Guardar'])){    
    try {
        $nuevoIdPersona = $_POST['idDePersona'];
        $idDepartamento = $_POST['Departamento'];
        $idFuncionario = $_POST['Asistente'];
        $horaEntrada = $formattedDateTime;
        $fecha = $formattedDate;

        if($nuevoIdPersona == 0){
            $nuevacedula = $_POST['Cedula'];
            $nuevoNombre = $_POST['nombre'];
            $nuevopApellido = $_POST['pApellido'];
            $nuevosApellido = $_POST['sApellido'];

            $sql = "INSERT INTO persona(psrCedula, psrNombre, psrPrimerApellido, psrSegundoApellido) VALUES ('$nuevacedula','$nuevoNombre','$nuevopApellido','$nuevosApellido')";
            if($db->query($sql)) {
                //echo "Se ha gestionado la visita!";
                $sql = "SELECT * FROM persona WHERE psrCedula='$nuevacedula'";
                foreach ($db->query($sql) as $row) {
                    $nuevoIdPersona = $row['psrID'];
                }
                
                $sql = "INSERT INTO visitas (vstIdPerona, vstIdFuncionario, vstIdDepartamento, vstHoraEntrada, vstFecha) VALUES ($nuevoIdPersona,$idFuncionario,$idDepartamento,'$horaEntrada','$fecha')";

                if ($db->query($sql)) {
                    echo '<script>alert("Se ha gestionado la visita!")</script>';
                } else {
                    echo "No se pudo gestionar la visita - Error: " . $sql . ":-" . mysqli_error($db);
                }

            } else {
                echo "No se pudo gestionar la visita - Error: " . $sql . ":-" . mysqli_error($db);
            }

        }else{
            //Ya hay una entrada?
            //Se registra la salida dela visita si es que: ya hay una visita para la misma persona, el mismo dia y sin hora de salida
            //Se busca el ID de la visita
            $vstId = 0;
            $sql = "SELECT vstId FROM visitas
            WHERE vstIdPerona = '$nuevoIdPersona' AND vstFecha = '$formattedDate' AND vstHorSalida IS NULL";
            foreach ($db->query($sql) as $row) {
                $vstId = $row['vstId'];
            }
            if($vstId != 0){
                //UPDATE visitas SET vstHorSalida = '$formattedDateTime' WHERE vstId = '$vstId'
                //Se actualiza el registro para ingresar la salida
                $sql = "UPDATE visitas SET vstHorSalida = '$formattedDateTime' WHERE vstId = '$vstId'";
                if ($db->query($sql)) {
                    echo '<script>alert("Se ha hecho el registro de salida!")</script>';
                } else {
                    echo "No se pudo hacer el registro de salida - Error: " . $sql . ":-" . mysqli_error($db);
                }  
            }else{
                //Se registra una entrada de visita
                $sql = "INSERT INTO visitas (vstIdPerona, vstIdFuncionario, vstIdDepartamento, vstHoraEntrada, vstFecha) VALUES ($nuevoIdPersona,$idFuncionario,$idDepartamento,'$horaEntrada','$fecha')";

                if ($db->query($sql)) {
                    echo '<script>alert("Se ha hecho el registro de entrada!")</script>';// "Se ha gestionado la visita!";
                } else {
                    echo "No se pudo hacer el registro de entrada - Error: " . $sql . ":-" . mysqli_error($db);
                }
            }      
        } 
    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}


if(isset($_POST['GuardarFuncionario'])){    
    try {
        //Variables Persona
        $funCedula = $_POST['Cedula'];
        $funNombre = $_POST['nombre'];
        $funpApellido = $_POST['pApellido'];
        $funsApellido = $_POST['sApellido'];
        $funsCorreo = $_POST['correo'];
        //Variables Funcionario
        $funIdPersona = 0;
        $idPuesto = $_POST['puesto'];
        $idHorario = $_POST['horario'];
        $idDepartamento = $_POST['Departamento'];
        //Verificar que ya exista la persona
        $sql = "SELECT * FROM persona WHERE psrCedula='$funCedula'";
        foreach ($db->query($sql) as $row) {
            $funIdPersona = $row['psrID'];
        }
        if($funIdPersona != 0){
            //Se ingresa el funcionario
            $sql = "INSERT INTO funcionario(fncIdPersona, fncIdPuesto, fncIdHorario, fncIdDepartamento, email) VALUES ($funIdPersona,$idPuesto,$idHorario,'$idDepartamento','$funsCorreo')";

            if ($db->query($sql)) {
                echo '<script>alert("Se ha ingresado el funcionario!")</script>';
            } else {
                echo "No se pudo ingresar el funcionario - Error: " . $sql . ":-" . mysqli_error($db);
            }
        }else {
            //Se ingresa la persona
            $sql = "INSERT INTO persona(psrCedula, psrNombre, psrPrimerApellido, psrSegundoApellido) VALUES ('$funCedula','$funNombre','$funpApellido','$funsApellido')";
            //Si la persona se ingresa correctamente, se ingresa el funcionario
            if($db->query($sql)) {
                //Se busca el ID de la persona
                $sql = "SELECT * FROM persona WHERE psrCedula='$funCedula'";
                foreach ($db->query($sql) as $row) {
                    $funIdPersona = $row['psrID'];
                }
                //Se ingresa el funcionario
                $sql = "INSERT INTO funcionario(fncIdPersona, fncIdPuesto, fncIdHorario, fncIdDepartamento, email) VALUES ($funIdPersona,$idPuesto,$idHorario,'$idDepartamento','$funsCorreo')";

                if ($db->query($sql)) {
                    echo '<script>alert("Se ha ingresado el funcionario!")</script>';
                } else {
                    echo "No se pudo ingresar el funcionario - Error: " . $sql . ":-" . mysqli_error($db);
                }

            } else {
                echo "No se pudo ingresar el funcionario - Error: " . $sql . ":-" . mysqli_error($db);
            }
        }
        
    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}

if(isset($_POST['entradasalidafun'])){    
    try {
        $idDePersona = intval($_POST['cedula']);
        //$idDeFun = 0;
        //Variables EntradasSalidas
        $etsId = 0;
        $etsFecha = $formattedDate;
        $etsIdFuncionario = 0;
        $etsHoraEntrada = $formattedDateTime;
        //Se busca el ID de la persona
        $sql = "SELECT * FROM persona WHERE psrCedula='$idDePersona'";
        foreach ($db->query($sql) as $row) {
            $idDePersona = $row['psrID'];
        }
        //Se busca el ID del funcionario
        $sql = "SELECT * FROM funcionario WHERE fncIdPersona='$idDePersona'";
        foreach ($db->query($sql) as $row) {
            $etsIdFuncionario = $row['fncId'];
        }
        //Valida que exista el funcionario
        if($etsIdFuncionario == 0){
            echo '<script>alert("Funcionario no existe!")</script>';
        }else{
            //Ya hay una entrada?
            //Se busca el ID de la estradaSalida si ya hay una para el mismo funcionario, el mismo dia y sin hora de salida
            $sql = "SELECT etsId FROM entradassalidas
            WHERE etsIdFuncionario = '$etsIdFuncionario' AND etsFecha = '$formattedDate' AND etsHoraSalida IS NULL";
            foreach ($db->query($sql) as $row) {
                $etsId = $row['etsId'];
            }
            if($etsId != 0){
                //Se actualiza el registro para ingresar la salida
                $sql = "UPDATE entradassalidas SET etsHoraSalida='$formattedDateTime' WHERE etsId = '$etsId'";
                if ($db->query($sql)) {
                    echo '<script>alert("Se ha hecho el registro de salida!")</script>';
                } else {
                    echo "No se pudo hacer el registro de salida - Error: " . $sql . ":-" . mysqli_error($db);
                }  
            }else{
                //Se registra la entrada salida
                $sql = "INSERT INTO entradassalidas(etsFecha, etsIdFuncionario, etsHoraEntrada) VALUES ('$etsFecha','$etsIdFuncionario','$etsHoraEntrada')";
                if ($db->query($sql)) {
                    echo '<script>alert("Se ha hecho el registro de entrada!")</script>';
                } else {
                    echo "No se pudo hacer el registro de entrada - Error: " . $sql . ":-" . mysqli_error($db);
                }
            } 
        }
        
    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}

if(isset($_POST['guardarPuesto'])){    
    try {
        //Variables Puesto
        $puestoNombre = $_POST['puesto'];
        $puestoSalario = $_POST['salario'];

        //Se ingresa el puesto
        $sql = "INSERT INTO puesto(pstPuesto, pstSalario) VALUES ('$puestoNombre','$puestoSalario')";
        if ($db->query($sql)) {
            echo '<script>alert("Se ha ingresado el nuevo puesto!")</script>';
        } else {
            echo "No se pudo ingresar el puesto - Error: " . $sql . ":-" . mysqli_error($db);
        }
    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}

if(isset($_POST['guardarHorario'])){    
    try {
        //Variables Horario
        $horNombre = $_POST['nombre'];
        $horhoraEntrada = $_POST['horaEntrada'];
        $horhoraSalida = $_POST['horaSalida'];
        $horlunes = $_POST['lunes'];
        $hormartes = $_POST['martes'];
        $hormiercoles = $_POST['miercoles'];
        $horjueves = $_POST['jueves'];
        $horviernes = $_POST['viernes'];
        $horsabado = $_POST['sabado'];
        $hordomingo = $_POST['domingo'];

        //echo $horlunes." ".$hormartes." ".$hormiercoles." ".$horjueves." ".$horviernes." ".$horsabado." ".$hordomingo;

        //Se ingresa el horario
        $sql = "INSERT INTO horario(hrrHoraEntrada, hrrHoraSalida, hrrNombre, hrrlunes, hrrmartes, hrrmiercoles, hrrjueves, hrrviernes, hrrsabado,hrrdomingo) VALUES ('$horhoraEntrada','$horhoraSalida','$horNombre','$horlunes','$hormartes','$hormiercoles','$horjueves','$horviernes','$horsabado','$hordomingo')";
        if ($db->query($sql)) {
            echo '<script>alert("Se ha ingresado el nuevo horario!")</script>';
        } else {
            echo "No se pudo ingresar el horario - Error: " . $sql . ":-" . mysqli_error($db);
        }
    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}

if(isset($_POST['guardarDepartamento'])){    
    try {
        //Variables Puesto
        $nombreDepart = $_POST['departamento'];

        //Se ingresa el puesto
        $sql = "INSERT INTO departamento(dptDescripcion) VALUES ('$nombreDepart')";
        if ($db->query($sql)) {
            echo '<script>alert("Se ha ingresado el nuevo departamento!")</script>';
        } else {
            echo "No se pudo ingresar el departamento - Error: " . $sql . ":-" . mysqli_error($db);
        }
    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}

if(isset($_POST['loginIngresar'])){    
    try {
        //Variables Login
        $logUser = $_POST['correo'];
        $plaintext_password = $_POST['contrasena'];
        //Variables Funcionario
        $admIdFuncionario = 0;
        //Se busca el ID del funcionario
        $sql = "SELECT * FROM funcionario WHERE email='$logUser'";
        foreach ($db->query($sql) as $row) {
            $admIdFuncionario = $row['fncId'];
            $admPass = $row['password'];
        }
        //Valida que exista el funcionario
        if($admIdFuncionario == 0){
            echo '<script>alert("Administrador no existe!")</script>';
        }else{
            $verify = password_verify($plaintext_password, $admPass);

            if ($verify) {
                header("Location: admin.php");
            } else {
                echo '<script>alert("Correo electrónico o contraseña incorrecta!")</script>';
            }
        }
    }catch (PDOException $e) {
        echo 'Hay un problema con la busqueda' . $e->getmessage();
    }
    $database->close();
}

?>