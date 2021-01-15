<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/contacto.css">
    <title>Contáctanos</title>
</head>
<body>
    <?php include_once "menu.php"; ?>
    <div class="espacio" style="height: 40px;"></div>
    <main class="main">
        <div class="content">
            <h1 class="title">CONTÁCTANOS</h1>

            <div class="contact-wrapper">
                <div class="contact-info">
                    <h4>Información:</h4>
                    <ul>
                        <li>JJr paruro 1401 tda 130 CC Shoping Center Paruro, Cercado de Lima</li>
                        <li>info.neonledstore@gmail.com</li>
                        <li>Telf: 936 910 425</li>
                    </ul>
                    <p>HORARIO:</p>
                    <p>Lun- Vie: 9am - 5pm</p>

                </div>
                <div class="contact-form">
                    <form action="" method="post">
                        <p>
                            <label for="fullName">Nombre Completo:</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                        </p>
                        <p>
                            <label for="email">Correo:</label>
                            <input type="email" name="email" id="email" placeholder="Correo">
                        </p>
                        <p>
                            <label for="telefono">Número telefónico:</label>
                            <input type="number" name="telefono" id="telefono" placeholder="Telefono">
                        </p>
                        <p class="block">
                            <label for="mensaje">Mensaje:</label>
                            <textarea name="mensaje" id="mensaje" rows="5" placeholder="Mensaje"></textarea>
                        </p>
                        <p class="block">
                            <button type="submit" name="contacto">Enviar</button>
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