<title>LevelUP - Login</title>

    <!-- Header -->
    <?php require_once 'header.php'; ?>
    <form action="login.php" method="post" class="form-login">
        <h2 class="form-titulo">Ingresá</h2>
            <div class="contenedor-inputs">
            <input type="text" name="usuario" placeholder="&#128272; Usuario">
            <input type="password" name="contraseña" placeholder="&#128272; Contraseña" >
            <input type="submit" value="Iniciar sesión" class="boton-iniciar-sesión">
            <br>
            <p class="resset-password"><a href="#">¿Olvidaste tu contraseña?</a></p>
            <br>
            <p class="form-link"> ¿No tienes una cuenta? <a href="registro.php">Registrate</a></p>
        </div>
    </form>

    <!-- Footer -->
    <?php require_once 'footer.php'; ?>
