<?php
require 'Includes/Vars_and_Functions.php';




include 'Includes/Header.php';
?>
<section class="pantalla"><h1 class="titulo">Bienvenido a este formulario de fechas</h1></section>
<section>
    <p><?= $message_error ?></p>
    <form class="formulario" action="Index.php" method="POST">
        <label>Introduce la fecha inicio del Evento: </label>
        <input type="text" name="fechaInicio" id="fechaInicio" placeholder="Fecha en formato (01/01/2020 23:00:00)" maxlength="21" pattern="[0-9\/\:\s\-]+" size="32" value="<?= htmlspecialchars($fecha['fechaInicio']) ?>" require /><br>
        <span class="error"><?= $error['fechaInicio'] ?></span><br><br>
        <label>Introduce la fecha fin del Evento: </label>
        <input type="text" name="fechaFin" id="fechaFin" placeholder="Fecha en formato (01/01/2020 23:00:00)" maxlength="21" pattern="[0-9\/\:\s\-]+" size="32" value="<?= htmlspecialchars($fecha['fechaFin']) ?>" require /><br>
        <span class="error"><?= $error['fechaFin'] ?></span><br><br>
        <input type="submit" value="Enviar" name="enviar" id="enviar" />
        <br><br>
        <p><?= $message ?></p>
    </form>
</section>

<?php include 'Includes/Footer.php'; ?>