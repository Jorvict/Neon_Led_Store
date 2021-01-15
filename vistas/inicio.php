<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/cursor.css">
    <title>Inicio</title>
</head>
<body>
    <?php include_once "menu.php"; ?>
    <div class="espacio" style="height: 80px;"></div>
    <main class="main">
        <div class="video">
            <video src="../public/videos/video_index.mp4" autoplay loop></video>
        </div>
        <div class="container">
            <div class="card">
                <div class="card__img">
                    <img src="../public/images/index/mision.png" alt="misión">
                </div>
                <div class="card__text">
                    <p>Brindar a nuestro clientes la mejor experiencia de compra virtual y además, ofrecerles un servicio totalmente personalizado, desde el trato hasta el producto a elección. De tal manera que consolidemos a Neon Leon Store como una empresa
                        referente de luces led a nivel nacional ofreciendo experiencias que generen valor y tendencia en la decoración del hogar.</p>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="../public/images/index/vision.png" alt="visión">
                </div>
                <div class="card__text">
                    <p>Posicionarnos como una empresa nacional reconocida en su categoría, a través de los diseños personalizados que ofrecemos.</p>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="../public/images/index/valores.png" alt="valores">
                </div>
                <div class="card__text">
                    <p>Responsabilidad, exactitud, compromiso, rapidez, veracidad, calidad, innovación y empatía, cualidades las cuales nos representan como una marca transparente y capaz de ofrecer un servicio A1 a todos nuestros clientes y futuros clientes.</p>
                </div>
            </div>
        </div>
    </main>
    <!--<div class="cursor"></div>-->
    <?php include_once "footer.php"; ?>
    <script>
        var cursor = document.querySelector(".cursor");
        document.addEventListener("mousemove", e => {
            cursor.setAttribute("style", "top:"+(e.pageY -10)+"px; left:"+(e.pageX -15)+"px;")
        })
    </script>
    <script src="https://kit.fontawesome.com/022b0abea9.js " crossorigin="anonymous "></script>
</body>
</html>