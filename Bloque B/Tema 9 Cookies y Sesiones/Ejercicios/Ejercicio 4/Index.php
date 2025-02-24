<?php
require 'Includes/Sessions.php';
include 'Includes/Header.php';
?>

<?php 
    if ($logged_in) { ?>
        <h2 class="index">Welcome back</h2>
    <?php } else { ?>
        <h2 class="index">Welcome</h2>
    <?php } ?>
<?php include 'Includes/Footer.php'; ?>