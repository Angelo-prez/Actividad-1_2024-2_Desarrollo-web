<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Email</th>
      <th>Teléfono</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario) { ?>
      <tr>
        <td><?php echo $usuario['id']; ?></td>
        <td><?php echo $usuario['nombre']; ?></td>
        <td><?php echo $usuario['apellidos']; ?></td>
        <td><?php echo $usuario['email']; ?></td>
        <td><?php echo $usuario['telefono']; ?></td>
        <td><?php echo $usuario['estado']; ?></td>
        <td>
          <a href="index.php?controlador=usuario&accion=editar&id=<?php echo $usuario['id']; ?>">Editar</a>
          <a href="index.php?controlador=usuario&accion=eliminar&id=<?php echo $usuario['id']; ?>">Eliminar</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<a href="index.php?controlador=usuario&accion=crear">Crear nuevo usuario</a>
</body>
</html>
