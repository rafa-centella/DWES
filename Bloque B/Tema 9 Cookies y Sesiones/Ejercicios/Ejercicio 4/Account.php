<?php
include 'Includes/Sessions.php';
require_login($logged_in);
include 'Includes/Header.php';
?>
<section>
    <h2>My Account</h2>
    <p>Aquí se muestra todos los datos propios de cada usuario.</p>
</section>
<?php include 'Includes/Footer.php'; ?>