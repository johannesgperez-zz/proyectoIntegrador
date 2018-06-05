<title>LevelUP - Creá tu Cuenta</title>

    <!-- Header -->
    <?php require_once 'header.php'; ?>
      <div class="creacion_cuenta">
      <form action="registrar.php" method="post" class="form-register">
        <h2 class="form-titulo">Creá tu Cuenta</h2>
        <div class="contenedor-inputs">
            <input type="text" name="nombre" placeholder="Nombre" class="input-48" required>
            <input type="text" name="apellidos" placeholder="Apellido" class="input-48" required>
            <input type="date" name="fecha de nacimiento" class="input-48" required>
            <select class="input-48" name="Genero">
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
            <input type="email" name="correo" placeholder="Correo" class="input-100" required>
            <input type="text" name="usuario" placeholder="Usuario" class="input-48" required>
            <input type="password" name="contraseña" placeholder="Contraseña" class="input-48" required>
            <input type="password" name="contraseña" placeholder="Confirma tu Contraseña" class="input-48" required>
            <input type="tel" name="telefono" placeholder="Teléfono" class="input-100" required>
            <input type="submit" value="Registrar" class="boton-registrar">
            <p class="form-link"> ¿Tienes una cuenta? <a href="ingreso_sesion.php">Inicia sesión</a></p>
        </div>
      </form>
      </div>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>
