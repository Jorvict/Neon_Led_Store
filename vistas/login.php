<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="stylesheet" href="../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php include_once "menu.php"; ?>
    <div class="espacio" style="height: 10px;"></div>
    <main class="main">
        <div class="content">
            <h1 class="title">INICIAR SESIÓN</h1>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <form action="../controladores/reglog.php" class="form" method="post">
                        <p>
                            <label for="email">Correo</label>
                            <input type="email" name="email" id="email" placeholder="Correo">
                        </p>
                        <p class="block">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" id="pass" placeholder="Contraseña">
                        </p>
                        <p class="block">
                            <button type="submit" name="login" class="button">Iniciar Sesión</button>
                        </p>
                        <p class="link">
                            ¿No tienes una cuenta? <a href="registrar.php">Registrate aquí</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
    <script src="https://kit.fontawesome.com/022b0abea9.js " crossorigin="anonymous "></script>
</body>

</html>