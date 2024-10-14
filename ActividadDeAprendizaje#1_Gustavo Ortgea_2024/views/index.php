<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
        require_once 'config/Database.php';
        require_once 'controllers/UsuarioController.php';
        
        $controlador = new UsuarioController();
        
        if (isset($_GET['controlador']) && isset($_GET['accion'])) {
          $controlador->$_GET['accion']();
        } elseif (isset($_GET['controlador'])) {
          $controlador->index();
        } else {
          $controlador->index();
        }
        
        if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['telefono']) && isset($_POST['estado'])) {
          $datos = array(
            'nombre' => $_POST['nombre'],
            'apellidos' => $_POST['apellidos'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'telefono' => $_POST['telefono'],
            'estado' => $_POST['estado']
          );
        
          if (isset($_POST['id'])) {
            $datos['id'] = $_POST['id'];
            $controlador->actualizar($datos);
          } else {
            $controlador->almacenar($datos);
          }
        }
</body>
</html>