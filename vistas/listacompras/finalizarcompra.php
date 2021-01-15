<?php session_start(); ?>
<!doctype html>
<html lang="es">

<head>
  <title>Finalizar Compra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="" type="image/png">
  <link href="//db.onlinewebfonts.com/c/34b75a9eafbdc85526bcdf9cbc9ad211?family=AvenirNextW10-Regular" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../../public/css/finalizarcompra.css">
</head>

<body>
  <header class="header-checkout">
    <div class="container-checkout">
      <div class="logo">
        <img src="../../public/images/card.png" class="mr-2">
        <span class="text">Finalizar compra</span>
      </div>
      <span class="float-right color-dark tline"> <a href="../tienda.php">Seguir comprando</a></span>
    </div>
  </header>

  <div class="flex">
    <section class="col-50">
      <div class="col-100">
        <div class="background-gray">
          <span>¿Ya tienes una cuenta?
            <a class="tline"> Inicia una sesión </a>
            para finalizar la compra mas rápido.
          </span>
        </div>
      </div>
      <div class="formulario">
        <h2>
          <span>1</span>
          Datos de envío
        </h2>

        <form action="">

          <div class="pt-25">
            <div class="lbl">
              <label for="Email"> <span>*</span>Email para confirmar</label>
            </div>
            <div class="input-form">
              <input type="email">
            </div>
          </div>

          <div class="pt-25">
            <div class="lbl">
              <label for="name"> <span>*</span>Nombre</label>
            </div>
            <div class="input-form">
              <input type="text">
            </div>
          </div>

          <div class="pt-25">
            <div class="lbl">
              <label for="apellido"> <span>*</span>Apellido</label>
            </div>
            <div class="input-form">
              <input type="text">
            </div>
          </div>

          <div class="pt-25">
            <div class="lbl">
              <label for="direccion"> <span>*</span>Direccion</label>
            </div>
            <div class="input-form">
              <input type="text">
            </div>
          </div>

          <div class="pt-25">
            <div class="lbl">
              <label for="ciudad"> <span>*</span>Ciudad</label>
            </div>
            <div class="input-form">
              <input type="text">
            </div>
          </div>

          <div class="flex">
            <div class="pt-25 col-50 m-0">
              <div class="lbl">
                <label for="pais"> <span>*</span>Pais</label>
              </div>
              <div class="selector">
                <select>
                  <option selected>Argentina</option>
                  <option>...</option>
                </select>
              </div>
            </div>

            <div class="pt-25 col-50 mr-auto">
              <div class="lbl">
                <label for="Email"> <span>*</span>Región</label>
              </div>
              <div class="selector">
                <select>
                  <option selected>Buenos aires</option>
                  <option>...</option>
                </select>
              </div>
            </div>
          </div>

          <div class="flex">
            <div class="pt-25  col-50 m-0">
              <div class="lbl">
                <label for="cp"> <span>*</span>Código postal</label>
              </div>
              <div class="input-form">
                <input type="text">
              </div>
            </div>
            <div class="pt-25 col-50 mr-auto">
              <div class="lbl">
                <label for="tel"> <span>*</span>Teléfono</label>
              </div>
              <div class="input-form">
                <input type="tel">
              </div>
            </div>
          </div>

          <div class="mtop-35 mbtn-35 text-white">
            <button type="submit" class="btn-dark">Continuar</button>
          </div>

        </form>

      </div>
    </section>

    <section class="col-50 ml-25">
      <div class="col-100">
        <div class="resumen fixed">
          <div>
          <h3 class="inline">resumen del pedido
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
          <div class="product ">

              <?php
                $compra = new ControladorListaFinalizarCompra();
                $lista = $compra->ListaFinalizarCompra($id);
                while ($dato = $lista->fetch_object()) { ?> 
                  <div class="description inline-flex">
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
                  
            <div class="resumen-total">

              <div class="description-total">
                <div>
                  <span>Subtotal</span>
                  <span class="subtotal float-right">$19.300,00</span>
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
              </div>
            </div>
          </div>

        </div>
      
      </div>
    </section>
  </div>
</body>
</html>