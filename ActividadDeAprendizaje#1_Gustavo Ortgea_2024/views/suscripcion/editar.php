<?php require_once '../header.php'; ?>

<h1>Editar Suscripción</h1>

<form action="index.php?controlador=suscripcion&accion=actualizar" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $suscripcion['id']; ?>">
    <label for="tipo">Tipo:</label>
    <input type="text" id="tipo" name="tipo" value="<?php echo $suscripcion['tipo']; ?>"><br><br>
    <label for="costo">Costo:</label>
    <input type="number" id="costo" name="costo" value="<?php echo $suscripcion['costo']; ?>"><br><br>
    <label for="duracion">Duración:</label>
    <input type="number" id="duracion" name="duracion" value="<?php echo $suscripcion['duracion']; ?>"><br><br>
    <label for="fecha_inicio">Fecha Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" value="<?php echo $suscripcion['fecha_inicio']; ?>"><br><br>
    <label for="usuario_id">Usuario ID:</label>
    <input type="number" id="usuario_id" name="usuario_id" value="<?php echo $suscripcion['usuario_id']; ?>"><br><br>
    <input type="submit" value="Actualizar">
</form>

<?php require_once '../footer.php'; ?>