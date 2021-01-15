    <nav>
        <div class="logo">
            <img loading="lazy" src="../../public/images/logo2.gif" alt="HouseNeonLed">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a href="../inicio.php">Inicio</a></li>
            <li><a href="../tienda.php">Tienda</a></li>
            <li><a href="../personaliza.php">Personalizar</a></li>
            <li><a href="../registrar.php">Registrate</a></li>
            <li><a href="../contacto.php">Contacto</a></li>
        </ul>
        <div class="icons">
            <?php
            if (isset($_SESSION["cli_estado"])) { ?>
                    <a href="../listacompras/listacompras.php"><i class="fas fa-shopping-cart"></i></a>
                    <span class="usuario"><?php echo $_SESSION["cli_nombre"] ?></span>
                    <span class="salir"><a href="../../controladores/cerrarsesion.php">Salir</a></span>
            <?php } else { ?>
                <a href="../../login.php"><i class="fas fa-user"></i></a>
            <?php } ?>
        </div>
    </nav>
