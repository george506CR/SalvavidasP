<?php

$mysqli = new mysqli("localhost", "root", "", "coltrolingresos");

$sql = "SELECT p.psrNombre AS nombreVisita,
p.psrPrimerApellido AS pApellidoVisita,
p.psrSegundoApellido AS sApellidoVisita,
fp.psrNombre AS nombreFuncionario,
fp.psrPrimerApellido AS pApellidoFuncionario,
fp.psrSegundoApellido AS sApellidoFuncionario,
d.dptDescripcion AS departamento,
v.vstFecha AS fecha,
v.vstHoraEntrada AS horaEntrada,
v.vstHorSalida AS horaSalida
FROM visitas v
JOIN persona p ON v.vstIdPerona=p.psrID
JOIN funcionario f ON v.vstIdFuncionario=f.fncId
JOIN persona fp ON f.fncIdPersona=fp.psrID
JOIN departamento d ON v.vstIdDepartamento=d.dptId";

$result = $mysqli->query($sql);

if (!$result) die('Couldn\'t fetch records');
//$num_fields = mysqli_num_rows($result);
$num_fields = mysqli_num_fields($result);
$headers = array();
for ($i = 0; $i < $num_fields; $i++) {
    $headers[] = mysqli_fetch_field_direct($result, $i)->name;
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="archivo_visitas.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}

?>