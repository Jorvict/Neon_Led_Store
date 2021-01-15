<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/error.css">
    <title>Advertencia</title>
</head>

<body>
    
    <?php include_once "menu.php"; ?>
    
    <div class="espacio" style="height: 80px;"></div>
    <main class="main">

        <div class="container">
            <h1 class="title">ADVERTENCIA</h1>
            <div class="card">
                <div class="card__text">
                    <p>Si ya tienes una cuenta entonces click en el boton "Ingresar".</p>
                </div>
                <div class="boton">
                    <a href="login.php"><button type="button" id="" >Ingresar</button></a>
                </div>
            </div>
            <div class="card">
                <div class="card__text">
                    <p>Si no tienes una cuenta entonces click en el boton "Registrarse".</p>
                </div>
                <div class="boton">
                    <a href="registrar.php"><button type="button" id="" >Registrarse</button></a>
                </div>
            </div>
            
        </div>
    </main>
    
    <?php include_once "footer.php"; ?>

    <script src="https://kit.fontawesome.com/022b0abea9.js " crossorigin="anonymous "></script>

</body>

</html>