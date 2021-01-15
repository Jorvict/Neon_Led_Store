<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/categoria.css">
    <link rel="stylesheet" href="../../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../../public/css/shared/footer.css">
    <title>Animados</title>
</head>
<body>
    <?php include_once "../menu2/menu2.php"; ?>
    <div class="espacio " style="height: 80px; background-color: #000;"></div>
    <?php
    if (isset($_SESSION["cli_estado"])) { ?>
    <main class="main">
        <div class="sidebar">
            <div class="titulo">
                <h2>CATEGORIAS</h2>
            </div>
            <div class="categorias">
                <div class="cat primero">
                    <?php
                         require_once "../../controladores/listacategorias.php";
                         $cate = new ControladorCat();
                         $lista = $cate->Categorias1();
                         while ($dato = $lista->fetch_object()) {?>
                        <a href="../<?php echo $dato->cat_link ?>"><?php echo $dato->cat_nombre ?> </a>
                    <?php } ?>
                </div>
                <div class="cat segundo">
                    <?php
                        require_once "../../controladores/listacategorias.php";
                        $cate = new ControladorCat();
                        $lista = $cate->Categorias2();
                        while ($dato = $lista->fetch_object()) { ?>
                        <a href="../<?php echo $dato->cat_link ?>"><?php echo $dato->cat_nombre ?> </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="principal">
            <div class="titulo">
                <img src="../../public/images/categorias/animados.webp">
            </div>
            <div class="contenido">
                <?php
                require_once "../../controladores/contenidocategoria.php";
                $ani = new ControladorContenidoCategoria();
                $lista = $ani->ListaAnimados();
                while ($dato = $lista->fetch_object()) { ?>
                    <div class="card">
                        <a href="../productos/animados.php?id=<?php echo $dato->ani_id ?>">
                            <div class="card__image">
                                <img src="../../public/images/animados/<?php echo $dato->ani_imagen ?>.webp">
                            </div>
                        </a>
                        <div class="card__titulo"><a href="../productos/animados.php?id=<?php echo $dato->ani_id ?>"><?php echo $dato->ani_nombre ?></a></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <?php } else { 
        header('location: ../error.php');
     } ?>

    <?php include_once "../footer.php"; ?>

    <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
</body>

</html>