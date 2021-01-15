<?php session_start(); ?>
<!doctype html>
<html lang="es">
  <head>
  <title>Checkout | NEONLED ARGENTINA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="" type="image/png">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="../../public/css/shared/footer.css">
</head>

<body>
  <header class="header-checkout">
    <div class="container-checkout">
      <div class="logo">
        <img src="../../public/images/logo2.gif" alt="logo" class="mr-2">
        <span class="text">Finalizar compra</span>
      </div>
      <span class="float-right color-dark tline"> <a href="../tienda.php">Seguir comprando</a></span>
    </div>
  </header>

    <main class="main__medioPago">
      <section class="descripcion">
        <div class="col-100">
          <div class="resumen fixed">
            <div>
              <h3 class="inline">
              resumen del pedido
              <?php
                $id = $_SESSION["cli_id"]; 
                require_once "../../controladores/ListaFinalizarCompra.php";

                $producto = new ControladorListaFinalizarCompra();
                $pro = $producto->ListaFinalProducto($id);
                while ($data = $pro->fetch_object()) {
                  echo "(".$data->productototal.")";
                } 
                ?> 
              </h3>
              <a href="listacompras.php" class="float-right tline">Editar carrito</a>
            </div>

            <div class="product">
              <?php
                $compra = new ControladorListaFinalizarCompra();
                $lista = $compra->ListaFinalizarCompra($id);
                while ($dato = $lista->fetch_object()) { ?> 
              <div class="description inline-flex resumen__total" id="resumen__total" >
                <img src="<?php echo $dato->com_imagen ?>" alt="" class="img-responsive">
                <div class="des-product ">
                  <div class="name-product"><?php echo $dato->com_producto ?></div>
                  <div class="cant">Cant: <?php echo $dato->com_cantidad ?></div>
                </div>
                <div class="precio ">
                  <span data-hook="item-price"><?php echo "S/. ".$dato->com_precio ?></span>
                </div>
              </div>
              <?php } ?>
              <div class="resumen1__total" >
                <div class="resumen1">
                  <div class="description-total">
                    <div>
                      <span>Envío </span>
                      <span class="envio float-right">Gratis</span>
                    </div>
                    <div class="total">
                      <span>Total</span>
                      <?php                   
                        $monto = new ControladorListaFinalizarCompra();
                        $mon = $monto->ListaFinalMonto($id);
                        while ($data1 = $mon->fetch_object()) { ?> 
                        <span class="float-right"><?php echo "S/. ".$data1->montototal ?></span>
                      <?php } ?>
                    </div>
                    <div class="more-details">
                      <button class="btn-detalle detalles_b" id="detalles">+ Más detalles</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="principal">
        <div class="principal__width">
          <h2 class="principal__subtitulos"> Ingresa aquí tu direccion de envio y teléfono</h2>
          <form id="formulario" class="formulario" autocomplete="off" action="">

            <div class="formulario__item">
              <label class="formulario__label" for="nombres">Nombres</label>
              <input class="formulario__input" id="nombres" name="nombres" value="<?php echo $_SESSION["cli_nombre"] ?>" disabled >
            </div>

            <div class="formulario__item">
              <label class="formulario__label" for="apellidos">Apellidos</label>
              <input class="formulario__input" name="apellidos" id="apellidos" value="<?php echo $_SESSION["cli_apellidos"] ?>" disabled>
            </div>

            <div class="formulario__item">
              <label  class="formulario__label" for="email" >Email</label>
              <input  class="formulario__input" name="email" id="email" value="<?php echo $_SESSION["cli_email"] ?>" disabled>
            </div>

            <div class="formulario__item">
              <label  class="formulario__label" for="direccion">Dirección (Ingresa tu Calle y Número/Lte/Mz) [Máximo, 90 caracteres]</label>
              <input   class="formulario__input"  type="text" name="direccion" id="direccion">
            </div>

            <div class="formulario__item">
              <label  class="formulario__label" for="telefono">telefono</label>
              <input   class="formulario__input"  type="tel" id="telefono" name="teléfono">
            </div>

            <h2 class="principal__subtitulos"> Selecciona el medio de pago</h2>

            <div class="next-form">
            <!-- <--yape -->
              <section class="yape">
                <div class="yape__head">
                  <div class="yape__header">
                    <input type="radio" id="yape"  name="pago" value="yape">
                    <label for="yape" class="label">yape</label>
                  </div>
                  <figure class="yape__logo">
                    <img class=" yape__img" src="../../public/images/finalizarcompra/yape.png" alt="yape">
                  </figure>
                </div>
                <div class="yape__content" id="yape__content">
                  <figure class="yape__qr"><img class="yape__imgQr" src="../../public/images/finalizarcompra/qr.png" alt="transferencia">
                    <figcaption class="yape__condicion">Puedes escanear el codigo qr y yapear o yapear al numero: 987654321</figcaption>
                  </figure>
                </div>
              </section>

              <!-- transferencia -->
              <section class="transferencia">
                <div class="transferencia__head">
                  <div class="transferencia__header">
                    <input type="radio" id="transferencia"  name="pago" value="transferencia">
                    <label  class="label" for="transferencia">transferencia bancaria</label>
                  </div>
                    <figure class="transferencia__logo">
                      <img  class="transferencia__img" src="../../public/images/finalizarcompra/pagoefectivo-gearbest.jpg" alt="yape">
                    </figure>
                </div>
                <div class="transferencia__content" id="transferencia__content">
                  <figure class="transferencia__imgBancos">
                    <figcaption class="transferencia__texto">
                      1. Puedes realizar el pago a través de tu Banca por Internet, Banca Móvil, Agentes o Agencias de estos bancos
                    </figcaption>
                      <img class="transferencia__bancos" src="../../public/images/finalizarcompra/bancos.jpg" alt="">
                  </figure>
                  <pre class="transferencia__pre">2. Nuestros detalles bancarios:
. Banco: Interbak
. numero de cuenta: 1213131312.
                  </pre>
                </div>
              </section>
            <input type="submit" class="formulario__submit" value="Finalizar pago">
          </form>
        </div>
      </section>
    </div>
  </div>
</main>

<?php include_once "../footer.php"?>

<script src="../../public/js/finalizarcompra.js"></script>
<script src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>
</body>

</html>
