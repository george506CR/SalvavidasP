<?php

$mysqli = new mysqli("localhost", "root", "", "coltrolingresos");

$sql = "SELECT es.etsFecha AS fecha,
p.psrNombre AS nombre,
p.psrPrimerApellido AS primerApellido,
p.psrSegundoApellido AS segundoApellido,
es.etsHoraEntrada AS horaEntrada,
es.etsHoraSalida AS horaSalida
FROM entradassalidas es
JOIN funcionario f ON es.etsIdFuncionario=f.fncId
JOIN persona p ON f.fncIdPersona=p.psrID";

$result = $mysqli->query($sql);

if (!$result) die('Couldn\'t fetch records');
//$num_fields = mysqli_num_rows($result) - 1;
$num_fields = mysqli_num_fields($result);

//echo mysqli_num_rows($result);
$headers = array();
for ($i = 0; $i < $num_fields; $i++) {
    //echo mysqli_fetch_field_direct($result, $i)->name;
    $headers[] = mysqli_fetch_field_direct($result, $i)->name;
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="archivo_entradas_salidas.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}

?>