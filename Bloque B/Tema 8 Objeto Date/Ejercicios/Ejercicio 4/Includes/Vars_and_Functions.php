<?php
$message = '';
$message_error = '';
$error = [
    'fechaInicio' => '',
    'fechaFin' => ''
];
$fecha = [
    'fechaInicio' => '',
    'fechaFin' => ''
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filters['fechaInicio']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['fechaInicio']['options']['regexp'] = '/[0-9\/\:\s\-]/';
    $filters['fechaFin']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['fechaFin']['options']['regexp'] = '/[0-9\/\:\s\-]/';

    $fecha = filter_input_array(INPUT_POST, $filters);
    $fechaInicio = date_create_from_format('d-m-Y H:i:s', $fecha['fechaInicio']);
    $fechaFin = date_create_from_format('d-m-Y H:i:s', $fecha['fechaFin']);

    $error['fechaInicio'] = ($fecha['fechaInicio']) ? '' : '*Ha ocurrido algún error al introducir la fecha.';
    $error['fechaFin'] = ($fecha['fechaFin']) ? '' : '*Ha ocurrido algún error al introducir la fecha.';
    $invalid = implode($error);

    if ($invalid) {
        $message_error = 'Debes solucionar los fallos para continuar';
    } else {
        $fechadiff = $fechaInicio->diff($fechaFin);
        $message = '
            <strong>Fecha inicio evento: </strong>' . $fechaInicio->format('d-m-Y H:i:s') . '<br>
            <strong>Fecha cierre evento: </strong>' . $fechaFin->format('d-m-Y H:i:s') . '<br>
            <strong>Duración del evento: </strong>' . $fechadiff->format('%m meses %d dias %H horas y %i minutos ') . ' <br>
        ';
    }
}