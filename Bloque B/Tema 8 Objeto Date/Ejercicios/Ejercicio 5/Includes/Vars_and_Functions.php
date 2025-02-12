<?php
$message = '';
$message_error = '';
$fecha = [
    'fecha' => '',
    'fechafin' => '',
    'periodo' => '',];
$error = [
    'fecha' => '',
    'fechafin' => '',
    'periodo' => '',];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filters['fecha']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['fecha']['options']['regexp'] = '/[0-9\/\:\s]/';
    $filters['fechafin']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['fechafin']['options']['regexp'] = '/[0-9\/\:\s]/';
    $filters['periodo']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['periodo']['options']['regexp'] = '/^(P7D|P15D)$/';

    $fecha = filter_input_array(INPUT_POST, $filters);

    $error = [
        'fecha' => ($fecha['fecha']) ? '' : 'Error en la fecha de inicio',
        'fechafin' => ($fecha['fechafin']) ? '' : 'Error en la fecha fin',
        'periodo' => ($fecha['periodo']) ? '' : 'Error en el periodo'];

    $invalid = implode($error);

    if ($invalid) {
        $message_error = 'Debes solucionar los errores.';
    } else {
        $event_start = date_create_from_format('d/m/Y H:i:s', $fecha['fecha']);
        $event_fin = date_create_from_format('d/m/Y H:i:s', $fecha['fechafin']);
        $interval = new DateInterval($fecha['periodo']); 
        $period = new DatePeriod($event_start, $interval, $event_fin);
        
        foreach ($period as $event) {
            $message .= '<b>' . $event->format('l') . '</b>, ' . $event->format('M j Y H:i:s') . '<br>';
        }
    }
}