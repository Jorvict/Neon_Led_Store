<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/registrar.css">
    <link rel="stylesheet" href="../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <title>Regístrate</title>
</head>
<body>
    <?php include_once "menu.php"; ?>
    
    <div class="espacio" style="height: 10px;"></div>
    <main class="main">
        <div class="content">

            <h1 class="title">REGISTRATE</h1>
            <div class="contact-wrapper">

                <div class="contact-form">
                    <form action="../controladores/reglog.php" method="post" class="form">
                        <p>
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" placeholder="Nombre (uno)">
                        </p>
                        <p>
                            <label for="last">Apellidos</label>
                            <input type="text" name="surname" id="last" placeholder="Apellidos">
                        </p>
                        <p>
                            <label for="email">Correo</label>
                            <input type="email" name="email" id="email" placeholder="Correo">
                        </p>
                        <p class="block">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="password" id="pass" placeholder="Contraseña">
                        </p>
                        <p class="block">
                            <button type="submit" name="boton" id="login" class="button">Registrar</button>
                        </p>
                        <p class="link">
                            ¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

    <script src="https://kit.fontawesome.com/022b0abea9.js " crossorigin="anonymous "></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="../public/js/alertas.js"></script>

</body>

</html>