<?php
$message = '';

$fechaActual = time();
$fechaActualFormat = date('l, d de F del Y H:i a', $fechaActual);

$fechaInicio = strtotime('2025-06-01T09:30:00');
$fechaInicioFormat = date('l, d F Y H:i a', $fechaInicio);

$fechaFin = mktime(9, 30, 0, 7, 1, 2025);
$fechaFinFormat = date('l, d F Y H:i a', $fechaFin);

$fechaDateTimeActual = new DateTime('@' . $fechaActual);
$fechaDateTimeInicio = new DateTime('@' . $fechaInicio);
$fechaDateTimeFin = new DateTime('@' . $fechaFin);


$diasfaltaninicio = $fechaDateTimeActual->diff($fechaDateTimeInicio);
$diasfaltanfin = $fechaDateTimeActual->diff($fechaDateTimeFin);

if ($fechaInicio > $fechaActual) {
    $message = 'Faltan: ' . $diasfaltaninicio->format('%R%a') . ' días para comenzar';
}elseif ($fechaFin < $fechaActual) {
    $message = 'El evento ya ha concluido';
}elseif ($fechaInicio < $fechaActual && $fechaActual > $fechaFin) {
    $message = 'El evento esta en curso';
}