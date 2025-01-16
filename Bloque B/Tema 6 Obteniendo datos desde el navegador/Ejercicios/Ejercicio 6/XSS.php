<?php
declare(strict_types = 1);
function escape(string $string): string {

    return htmlspecialchars($string, ENT_COMPAT|ENT_HTML5, 'UTF-8', true);

}

$message = $_GET['msg'] ?? 'Click the link above';

include 'Includes/Header.php';
?>

<h1>XSS Example</h1>
<p><?= escape($message) ?></p>

<?php include 'Includes/Footer.php'; ?>