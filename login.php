<?php
require_once("autoload.php");
if ($_POST) {
  $tipoConexion = "MYSQL";
  if ($tipoConexion == "JSON") {
    $usuario = new Usuario($_POST["email"], $_POST["password"]);
    $errores = $validar->validacionLogin($usuario);
    if (count($errores) == 0) {
      $usuarioEncontrado = $json->buscarPorEmail($usuario->getEmail());
      if ($usuarioEncontrado == null) {
        $errores["email"] = "Usuario no existe";
      } else {
        if (Autenticador::verificarPassword($usuario->getPassword(), $usuarioEncontrado["password"]) != true) {
          $errores["password"] = "El ususario o la contraseña no son correctos, verifique nuevamente";
        } else {
          Autenticador::seteoSesion($usuarioEncontrado);
          if (isset($_POST["recordar"])) {
            Autenticador::seteoCookie($usuarioEncontrado);
          }
          if (Autenticador::validarUsuario()) {
            redirect("perfil.php");
          } else {
            redirect("registro.php");
          }
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="master.css">
  <title>Login</title>
</head>

<body>
  <div class="container">
    <?php
    if (isset($errores)) : ?>
      <ul class="alert alert-danger">
        <?php
          foreach ($errores as $key => $value) : ?>
          <li> <?= $value; ?> </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <section class="row text-center">
      <article class="mt-5 mx-auto">
        <h2>Inicio de sesión</h2>

        <form action="" method="POST" class="mt-5">
          <div class="form-group text-left">
            <label for="email">Email:</label>
            <input value="<?= $errores['email'] ?? ''; ?>" name="email" type="email" class="form-control" id="email" placeholder="Correo electrónico">
            <small id="emailHelp" class="form-text text-muted">nunca compartiremos tu contraseña con nadie.</small>
          </div>

          <div class="form-group text-left">
            <label for="password">Contraseña:</label>
            <input name="password" type="password" class="form-control" id="password" value="" placeholder="Contraseña" />
          </div>
          <div class="form-group text-left">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="recordar">
              <label class="form-check-label" for="recordar">
                Recordarme
              </label>
            </div>
          </div>

          <button type="submit" class="col-lg-12 mt-2 btn btn-primary">Entrar</button>
          <br>
          <a href="olvidePassword.php" class="text-right text-muted">Olvide mi contraseña</a>
          <br>
          <button class="mt-3 btn btn-light" type="submit"><a href="index.php">Volver</a></button>

        </form>
        <!-- value="<?= isset($errores["email"]) ? "" : inputUsuario("email"); ?>" -->

      </article>

    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>