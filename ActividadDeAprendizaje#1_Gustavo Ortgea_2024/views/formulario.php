<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
<form action="index.php?controlador=usuario&accion=<?php echo isset($usuario) ? 'actualizar' : 'almacenar'; ?>" method="post">
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" value="<?php echo isset($usuario) ? $usuario['nombre'] : ''; ?>">
  <br>
  <label for="apellidos">Apellidos:</label>
  <input type="text" id="apellidos" name="apellidos" value="<?php echo isset($usuario) ? $usuario['apellidos'] : ''; ?>">
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo isset($usuario) ? $usuario['email'] : ''; ?>">
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo isset($usuario) ? $usuario['password'] : ''; ?>">
  <br>
  <label for="telefono">Teléfono:</label>
  <input type="text" id="telefono" name="telefono" value="<?php echo isset($usuario) ? $usuario['telefono'] : ''; ?>">
  <br>
  <label for="estado">Estado:</label>
  <select id="estado" name="estado">
    <option value="activo" <?php echo isset($usuario) && $usuario['estado'] == 'activo' ? 'selected' : ''; ?>>Activo</option>
    <option value="inactivo" <?php echo isset($usuario) && $usuario['estado'] == 'inactivo' ? 'selected' : ''; ?>>Inactivo</option>
  </select>
  <br>
  <?php if (isset($usuario)) { ?>
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
  <?php } ?>
  <button type="submit">Guardar</button>
</form>
</body>
</html>
