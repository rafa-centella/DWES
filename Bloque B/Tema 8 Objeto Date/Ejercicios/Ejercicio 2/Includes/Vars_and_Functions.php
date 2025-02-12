<?php
$message = '';
$message_error = '';
$error = '';
$fecha = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filters['fecha']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['fecha']['options']['regexp'] = '/[0-9\/\:\s]/';

    $fecha = filter_input_array(INPUT_POST, $filters);
    $fecha = $fecha['fecha'];

    $error = ($fecha) ? '' : '*Ha ocurrido algún error al introducir la fecha.';

    if ($error) {
        $message_error = 'Debes solucionar los fallos para continuar';
    } else {
        $fechadateTime = date_create_from_format('d/m/Y H:i:s', $fecha);
        $fechaTimeUnix = $fechadateTime->getTimestamp();
        $fechaformato = '"' . $fechadateTime->format('d') . ' de ' . $fechadateTime->format('F') . ' de ' . $fechadateTime->format('Y') . ', ' . $fechadateTime->format('H:i') . '"';

        $message = '
            <strong>Fecha en formato: </strong>' . $fechadateTime->format('Y-m-d H:i:s') . '<br>
            <strong>Timestamp Unix: </strong>' . $fechaTimeUnix . ' <br>
            <strong>Formato legible: </strong>' . $fechaformato . ' <br>
        ';
    }
}