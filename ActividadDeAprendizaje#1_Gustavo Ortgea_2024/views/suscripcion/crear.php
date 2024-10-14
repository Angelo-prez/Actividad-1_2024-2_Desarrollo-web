<?php require_once '../header.php'; ?>

<h1>Crear Nueva Suscripción</h1>

<form action="index.php?controlador=suscripcion&accion=guardar" method="post">
    <label for="tipo">Tipo:</label>
    <input type="text" id="tipo" name="tipo"><br><br>
    <label for="costo">Costo:</label>
    <input type="number" id="costo" name="costo"><br><br>
    <label for="duracion">Duración:</label>
    <input type="number" id="duracion" name="duracion"><br><br>
    <label for="fecha_inicio">Fecha Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio"><br><br>
    <label for="usuario_id">Usuario ID:</label>
    <input type="number" id="usuario_id" name="usuario_id"><br><br>
    <input type="submit" value="Guardar">
</form>

<?php require_once '../footer.php'; ?>