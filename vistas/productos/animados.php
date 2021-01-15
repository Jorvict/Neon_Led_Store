<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/producto.css">
    <link rel="stylesheet" href="../../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../../public/css/shared/footer.css">
    <title>Producto Animados</title>
</head>
<body>
    <?php include_once "../menu2/menu2.php"; ?>
    <div class="espacio" style="height: 100px; background-color: #000;"></div>
    <?php
    require_once "../../controladores/producto.php";
        $ani = new ControladorProducto();
        $lista = $ani->ProductoAnimados($_GET["id"]);
    ?>
    <main class="main">
        <div class="tarjeta">
            <?php while ($dato = $lista->fetch_object()) { ?>
                <div class="tarjeta__imagen">
                    <img id="imagen" src="../../public/images/animados/<?= $dato->ani_imagen ?>.webp">
                </div>
                <div class="tarjeta__detalle">
                    <div class="titulo">
                        <input type="hidden" id="precio1" value="<?= $dato->ani_precio ?>">
                        <h2 id="producto" ><?= $dato->ani_nombre ?></h2>

                        <h3 id="precio">Escoga un tamaño</h3>
                        <h3 id="precioBD">S/. <?= $dato->ani_precio ?></h3>
                    </div>
                    <div class="eleccion">
                        <span>Tamaño</span>
                        <select id="tamano">
                            
                            <option value="standar">Standar</option>
                            <option value="personalizado">Personalizado</option>
                        </select>
                        <span>Cantidad</span>
                        <input type="number" id="cantidad" value="1">
                    </div>
                    <div class="botones">
                        <?php
                        if (isset($_SESSION["cli_estado"])) { ?>
                            <button type="button" id="agregar_carrito" >Agregar al carrito</button>
                            <a href="../listacompras/checkout.php"><button type="button" id="comprar_ahora">Comprar ahora</button></a>
                            <input type="hidden" id="cliente" value="<?php echo $_SESSION["cli_id"] ?>">
                        <?php } else { ?>
                            <a href="../registrar.php"><button type="button" id="" >Primero regístrese</button></a>
                        <?php } ?>     
                            <a class="volver" href="../categorias/animados.php">
                                <img src="../../public/images/boton_volver.webp">
                            </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    <?php include_once "../footer.php"; ?>
    <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../public/js/listacompras.js"></script>
</body>

</html>