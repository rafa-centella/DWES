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
        $fechaUnix = new DateTime();
        $fechaUnix = $fechaUnix->getTimestamp();
        $fechadateTime = date_create_from_format('d/m/Y H:i:s', $fecha);
        $fechaSet = clone $fechadateTime;
        $fechaSet->setDate(2025, 10, 16);
        $fechaSet->setTime(15, 30, 00);
        $unix = clone $fechaSet;
        $unix->setTimestamp($fechaUnix);
        $fechaModify = clone $fechaSet;
        $fechaModify->modify('+5 days 4 hours 30 min');
        $message = '
            <strong>Fecha inicial: </strong>' . $fechadateTime->format('d-m-Y H:i:s') . '<br>
            <strong>Cambiando la fecha: </strong>' . $fechaSet->format('d/m/Y') . ' <br>
            <strong>Cambiando la hora: </strong>' . $fechaSet->format('H:i:s') . ' <br>
            <strong>Modificando la fecha con Unix: </strong>' . $unix->format('d/m/Y H:i:s a') . ' <br>
            <strong>Usando la función modify: </strong>' . $fechaModify->format('d-m-y H:i:s') . ' <br>
        ';
    }
}