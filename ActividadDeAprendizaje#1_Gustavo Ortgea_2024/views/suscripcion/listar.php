<?php require_once '../header.php'; ?>

<h1>Listado de Suscripciones</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Costo</th>
            <th>Duración</th>
            <th>Fecha Inicio</th>
            <th>Usuario ID</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($suscripciones as $suscripcion) { ?>
                <tr>
                    <td><?php echo $suscripcion['id']; ?></td>
                    <td><?php echo $suscripcion['tipo']; ?></td>
                    <td><?php echo $suscripcion['costo']; ?></td>
                    <td><?php echo $suscripcion['duracion']; ?></td>
                    <td><?php echo $suscripcion['fecha_inicio']; ?></td>
                    <td><?php echo $suscripcion['usuario_id']; ?></td>
                    <td>
                        <a href="index.php?controlador=suscripcion&accion=editar&id=<?php echo $suscripcion['id']; ?>">Editar</a>
                        <a href="index.php?controlador=suscripcion&accion=eliminar&id=<?php echo $suscripcion['id']; ?>">Eliminar</a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<a href="index.php?controlador=suscripcion&accion=crear">Crear Nueva Suscripción</a>

<?php require_once '../footer.php'; ?>