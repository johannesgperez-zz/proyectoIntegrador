<title>LevelUP - Creá tu Cuenta</title>

    <!-- Header -->
    <?php require_once 'header.php';
          require_once 'funciones.php';
	          if (estaLogueado()) {
		            header('location: perfil.php');
            exit;
            } ?>
            <?php
            $name = '';
            $lastName = '';
            $email = '';
            $fechaNac = '';
            $user = '';
            $telefono = '';
            // Array de errores vacío
            $errores = [];
            // Si envían algo por $_POST
            if ($_POST) {
              // Persisto los datos con la información que envía el usuario por $_POST
              $name = trim($_POST['name']);
              $lastName = trim($_POST['lastName']);
              $email = trim($_POST['email']);
              $fechaNac = trim($_POST['fechaNac']);
              $user = trim($_POST['user']);
              $telefono = trim($_POST['telefono']);
              // Valido y guardo en errores
              $errores = validar($_POST, 'avatar');
              // Si el array de errorres está vacío, es porque no hubo errores, por lo tanto procedo con lo siguiente
              if (empty($errores)) {
                $errores = guardarImagen('avatar');
                if (empty($errores)) {
                  // En la variable $usuario, guardo al usuario creado con la función crearUsuario() la cual recibe los datos de $_POST y el avatar
                  $usuario = guardarUsuario($_POST, 'avatar');
                  // Logueo al usuario y por lo tanto no es necesario el re-direct
                  loguear($usuario);
                }
              }
            } ?>
            <?php if (!empty($errores)): ?>
            <div class="div-errores alert alert-danger">
              <ul>
                <?php foreach ($errores as $value): ?>
                <li><?=$value?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>             
  

      <div class="creacion_cuenta">
      <form action="registro.php" method="post" class="form-register">
        <h2 class="form-titulo">Creá tu Cuenta</h2>
        <div class="contenedor-inputs">
        <div class="form-group <?= isset($errores['name']) ? 'has-error' : null ?>">
            <input type="text" name="name" placeholder="Nombre" class="input-48" required value="<?=$name?>">
            <span class="help-block" style="<?= !isset($errores['name']) ? 'display: none;' : ''; ?>">
								<b class="glyphicon glyphicon-exclamation-sign"></b>
								<?= isset($errores['name']) ? $errores['name'] : ''; ?>
							</span>	
        <div class="form-group <?= isset($errores['lastName']) ? 'has-error' : null ?>">
            <input type="text" name="lastName" placeholder="Apellido" class="input-48" required value="<?=$lastName?>">
            <div class="form-group <?= isset($errores['fechaNac']) ? 'has-error' : null ?>">
            <input type="date" name="fechaNac" class="input-48" required value="<?=$fechaNac?>">
            <select class="input-48" name="Genero">
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
            <div class="form-group <?= isset($errores['email']) ? 'has-error' : null ?>">
            <input type="email" name="email" placeholder="Correo" class="input-100" required value="<?=$email?>">
            <span class="help-block" style="<?= !isset($errores['email']) ? 'display: none;' : ''; ?>">
								<b class="glyphicon glyphicon-exclamation-sign"></b>
								<?= isset($errores['email']) ? $errores['email'] : ''; ?>
							</span>
            <div class="form-group <?= isset($errores['user']) ? 'has-error' : null ?>">
            <input type="text" name="user" placeholder="Usuario" class="input-48" required value="<?=$user?>">
            <div class="form-group <?= isset($errores['pass']) ? 'has-error' : null ?>">
            <input type="password" name="pass" placeholder="Contraseña" class="input-48" required value="">
            <span class="help-block" style="<?= !isset($errores['pass']) ? 'display: none;' : ''; ?>">
								<b class="glyphicon glyphicon-exclamation-sign"></b>
								<?= isset($errores['pass']) ? $errores['pass'] : ''; ?>
							</span>
              <div class="form-group <?= isset($errores['rpass']) ? 'has-error' : null ?>">
            <input type="password" name="rpass" placeholder="Confirma tu Contraseña" class="input-48" required value="">
            <span class="help-block" style="<?= !isset($errores['rpass']) ? 'display: none;' : ''; ?>">
								<b class="glyphicon glyphicon-exclamation-sign"></b>
								<?= isset($errores['rpass']) ? $errores['rpass'] : ''; ?>
							</span>
              <div class="form-group <?= isset($errores['telefono']) ? 'has-error' : null ?>">
            <input type="number" name="telefono" placeholder="Teléfono" class="input-100" required value="<?=$telefono?>">
            <input name="foto" type="file" size="20"> 
            <input type="submit" value="Registrar" class="boton-registrar">
            <p class="form-link"> ¿Tienes una cuenta? <a href="ingreso_sesion.php">Inicia sesión</a></p>
        </div>
      </form>
      </div>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>
