<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto frutas y plantas</title>
    <link rel="stylesheet" href="../../public/css/producto.css">
    <link rel="stylesheet" href="../../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../../public/css/shared/footer.css">
</head>

<body>
    <?php include_once "../menu2/menu2.php"; ?>

    <div class="espacio " style="height: 100px; background-color: #000;"></div>
    <?php
    require_once "../../controladores/producto.php";
    $fru = new ControladorProducto();
    $lista = $fru->ProductoFrases($_GET["id"]);
    ?>
    
    <main class="main">
        <div class="tarjeta">
            <?php while ($dato = $lista->fetch_object()) { ?>
                <div class="tarjeta__imagen">
                    <img src="../../public/images/frases/<?= $dato->fra_imagen ?>.webp">
                </div>
                <div class="tarjeta__detalle">
                    <div class="titulo">

                        <h2><?= $dato->fra_nombre ?></h2>
                        <h3>S/. <?= $dato->fra_precio ?></h3>

                    </div>

                    <div class="eleccion">
                        <span>Tamaño</span>
                        <input type="text">
                        <span>Cantidad</span>
                        <input type="text">
                    </div>

                    <div class="botones">
                        <button>Agregar al carrito</button>
                        <button>Comprar ahora</button>
                        <a class="volver" href="../categorias/frases.php">
                            <img src="../../public/images/elementos/boton_volver.webp">
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>

    <?php include_once "../footer.php"; ?>

    <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
    
</body>

</html>