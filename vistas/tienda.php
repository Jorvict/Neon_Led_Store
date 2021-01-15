<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/tienda.css">
    <link rel="stylesheet" href="../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <title>Tienda</title>
</head>
<body>
    <?php include_once "menu.php"; ?>
        <div class="espacio " style="height: 80px; background-color: #000;"></div>
    <main class="main">
        <div class="sidebar">
            <div class="titulo">
                <h2>CATEGORÍAS</h2>
            </div>
            <div class="categorias">
                <div class="cat primero">
                    <?php
                        require_once "../controladores/categorias.php";
                        $cate = new ControladorCategorias();
                        $lista = $cate->ListaCategorias1();
                        while ($dato = $lista->fetch_object()) { ?>
                        <a href="<?php echo $dato->cat_link ?>"><?php echo $dato->cat_nombre ?> </a>
                    <?php } ?>
                <?php if (!isset($_SESSION["cli_estado"])) { ?>    
                    <a href="login.php" class="ver_mas2">Ver más</a>
                </div>
                <?php } else {  ?>
                </div>
                <div class="cat segundo">
                    <?php
                        require_once "../controladores/categorias.php";
                        $cate = new ControladorCategorias();
                        $lista = $cate->ListaCategorias2();
                        while ($dato = $lista->fetch_object()) { ?>
                        <a href="<?php echo $dato->cat_link ?>"><?php echo $dato->cat_nombre ?> </a>
                    <?php } 
                } ?>
                </div>
            </div>
        </div>
        <div class="principal">
            <div class="titulo">
                <img src="../public/images/tienda.png">
            </div>
            <div class="contenido">
                <?php if (isset($_SESSION["cli_estado"])) {
                    require_once "../controladores/categorias.php";
                    $cate = new ControladorCategorias();
                    $lista = $cate->Prueba();
                    while ($dato = $lista->fetch_object()) { ?>
                        <div class="card">
                            <a href="<?php echo $dato->cat_link ?>">
                                <div class="card__image">
                                    <img src="../public/images/categorias1/<?php echo $dato->cat_imagen ?>.webp">
                                </div>
                            </a>
                        </div>   
                <?php } ?>
                <?php } else { 
                    require_once "../controladores/categorias.php";
                    $cate = new ControladorCategorias();
                    $lista = $cate->Prueba2();
                    while ($dato = $lista->fetch_object()) { ?>
                        <div class="card">
                            <a href="<?php echo $dato->cat_link ?>">
                                <div class="card__image">
                                    <img src="../public/images/categorias1/<?php echo $dato->cat_imagen ?>.webp">
                                </div>
                            </a>
                        </div>   
                <?php } ?>
                    <a href="login.php" class="ver_mas">Ver más</a>
                <?php }?>
            </div>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
    <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
</body>
</html>