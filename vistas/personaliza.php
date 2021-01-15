<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/personaliza.css">
    <link rel="stylesheet" href="../public/css/shared/navbar.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <title>PERZONALIZAR</title>
</head>
<body>
    <?php include_once "menu.php"; ?>
    <div class="espacio" style="height: 10px;"></div>
    <?php if (isset($_SESSION["cli_estado"])) { ?>
        <main class="main">
        <div class="content">
            <h1 class="title">PERSONALIZA TU DISEÑO</h1>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <form action="../controladores/enviarcorreo.php" method="post">
                        <p>
                            <label for="opciones" id="note">¿Qué es lo que deseas personalizar?</label>
                            <select name="" id="opciones">
                                <option value="0">Logo / Frase / Otros</option>
                                <option value="imagen">Imagen</option>
                                <option value="frases">Frases</option>
                                <option value="otros">Otros</option>
                            </select>
                        </p>
                        <p>
                            <label for="medida">Medidas</label>
                            <input type="text" name="medida" id="medida" placeholder="Medidas">
                        </p>
                        <p>
                            <label for="archivo">Archivo:</label>
                            <input type="file" name="adjunto" id="adjunto" placeholder="Archivo" >
                        </p>
                        <p class="mensaje"> Solo archivos .png y .jpg. No mayor a 5MB, por favor.</p>
                        <p class="block">
                            <label for="notas">Descripción</label>
                            <textarea name="notas" id="notas" rows="5" placeholder="Escribir una descripción breve."></textarea>
                        </p>
                        <p class="block">
                            <button type="submit" class="btn1">Enviar</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main> 
<?php }else{ ?>
    
    <main class="main">
        <div class="content">
            <h1 class="title">PERSONALIZA TU DISEÑO</h1>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <form action="../controladores/enviarcorreo.php" method="post">
                        <p>
                            <label for="opciones" id="note">¿Qué es lo que deseas personalizar?</label>
                            <select name="" id="opciones">
                                <option value="0">Logo / Frase / Otros</option>
                                <option value="imagen">Imagen</option>
                                <option value="frases">Frases</option>
                                <option value="otros">Otros</option>
                            </select>
                        </p>
                        <p>
                            <label for="medida">Medidas</label>
                            <input type="text" name="medida" id="medida">
                        </p>
                        <p>
                            <label for="archivo">Archivo:</label>
                            <input type="file" name="adjunto" id="adjunto">
                        </p>
                        <p class="mensaje"> Solo archivos .png y .jpg. No mayor a 5MB, por favor.</p>
                        <p class="block">
                            <label for="notas">Notas</label>
                            <textarea name="notas" id="notas" rows="5"></textarea>
                        </p>
                        <p class="block">
                            <button type="submit" class="btn1">
                                Enviar
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main> 
    <?php
    echo "<script>
            Swal.fire({
                title: 'ADVERTENCIA',
                text: 'Si desea personalizar un diseño, registrarse o ingresar antes.',
                showDenyButton: true,
                denyButtonText: `Cancelar`,
                confirmButtonText: `Ingresar`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'registrar.php';
                }else{
                    window.location = 'tienda.php';
                } 
            });
        </script>";
} 
?>
<?php include_once "footer.php"; ?>
<script src="https://kit.fontawesome.com/022b0abea9.js " crossorigin="anonymous "></script>

</body>

</html>