<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../../public/css/shared/footer.css">
    <link rel="stylesheet" href="../../public/css/listacompras.css">
    <title>Carrito</title>
</head>
<body>

    <?php include_once "../menu2/menu2.php"; ?>

    <div class="espacio" style="height: 80px;"></div>
    <main class="main">
        <div class="principal-container">
            <section class="basket">
                <div class="header-container">
                    <!--<h2 class="title products">
                        Bolsa de Compras (0 productos)
                    </h2>-->
                </div>

                <div class="basket-item-container">
                    <!-- <section class="basket-item">
                        <form class="item-form">
                           <section class="section-left">
                                <figure class="img-container">
                                    <img class="img-producto" src="./public/images/index/producto1.jpg" alt="imagen de producto">
                                </figure>
                                <div class="product-description">
                                    <h5 class="product-title">
                                        ADIDAS
                                    </h5>
                                    <h4 class="product-name">
                                        Zapatillas Hombre Running
                                    </h4>
                                    <p class="product-id">
                                        SKU 163254741
                                    </p>
                                    <div class="delete-button-container">
                                        <button class="btn-delete">Eliminar</button>
                                    </div>
                                </div>
                            </section>
        
                            <section class="section-right">
                                <div class="product-price">
                                    <span>S/169.99</span>
                                    <label>(Oferta)</label>
                                </div>
                                <div class="product-quantity">
                                    <div class="container-quantity">
                                        <button class="decrease btn1-d" title="Reducir cantidad">
                                            -
                                        </button>
                                        <input type="number" class="quantity-value inp-1" value="1" min="0">
                                        <button class="increase btn1-i">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </section> 
                        </form>
                    </section>-->
                </div>

                </section>

                <section class="order-summary">
                    <div class="order-status-container">
                        <form class="order-status">
                            <div class="title-container">
                                <h4 class="title">
                                    Resumen de tu orden
                                    <input type="hidden" id="cliente" value="<?php echo $_SESSION["cli_id"] ?>">
                                </h4>
                                <div class="total-container">
                                    <!--<p class="subtotal">
                                        Sub-total productos
                                    </p>
                                    <span class="total">S/ 0.00</span>-->
                                </div>
                                <div class="button-container">
                                    <button class="btn-buy">
                                        <a href="checkout.php">Finalizar compra</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <?php include_once "../footer.php"; ?>
    <script src="https://kit.fontawesome.com/022b0abea9.js " crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../../public/js/listacompras2.js"></script>
</body>

</html>