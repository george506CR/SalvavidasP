<?php
session_start();
include_once('conexion.php');





if (isset($_POST['Guardar'])) {
    $database = new ConectarBD();
    $db = $database->open();
    try {
        //code...

        $stmt = $db->prepare("INSERT INTO `visitas`( `vstIdPerona`, `vstIdFuncionario`, `vstIdDepartamento`, `vstHoraEntrada`, `vstHorSalida`, `vstFecha`, `vstMotivo`) VALUES ()");
        $_SESSION['message'] = ($stmt->execute(array(':nombrecontacto' => $_POST['nombrecontacto'], ':celular' => $_POST['celular'], 'email' => $_POST['email'], ':direccion' => $_POST['direccion']))) ? 'Contacto agregado correctamente' : 'Algo salio mal, no se pudo agregar correcctamente';
    } catch (PDOException $e) {
        //throw $th;
        $_SESSION['message'] = $e->getMessage();
    }
    $database->close();
} else {
    # code...
    $_SESSION['message'] = 'Rellene el formulario';
}
header('location:index.php');
?>

$database->close();
} catch (PDOException $e) {
//throw $th;
$_SESSION['message']=$e->getMessage();

$database->close();
}


}


?>