<?php 
include 'Includes/Fleet.php';

$coches = [new Vehicle('Seat', 'Ibiza', '1006KGB', false),
    new Vehicle('Seat', 'León','2974GHD', true),
    new Vehicle('Renault', 'Megane','0587HDI', true),
    new Vehicle('Audi', 'A5','9874KMP', true),
    new Vehicle('Lamborghinni', 'Murcielago','1007MYG', false),
];

$fleet = new Fleet('Guadajoz', $coches);

require 'Includes/Header.php';
?>
<h2>Añadimos un vehículo</h2>
<p><?= ($fleet->addVehicle(new Vehicle('Seat', 'Córdoba', '1057BWC', true))) ? 'Vehículo añadido' : 'Este vehículo ya existe en el parque' ?></p>
<h3>Añadimos un vehículo ya existente</h3>
<p><?= ($fleet->addVehicle(new Vehicle('Seat', 'Córdoba', '1057BWC', true))) ? 'Vehículo añadido' : 'Este vehículo ya existe en el parque' ?></p>
<hr>
<h2>Mostramos el parque de vehículos</h2>
<p><?= $fleet->listVehicles(); ?></p>
<hr>
<h2>Mostramos vehículos disponibles</h2>
<p><?= $fleet->listAvailableVehicles(); ?></p>


<?php include 'Includes/Footer.php'; ?>