<?php include 'Includes/Header.php'; ?>

<h1>XSS</h1>
<p><a href="./XSS.php?msg=<script src=js/>bad.js></script>">ESCAPING MARKUP</a></p>

<?php include_once 'Includes/Footer.php'; ?>