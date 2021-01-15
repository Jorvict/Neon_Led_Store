<?php
require_once "../modelos/reglog.php";
$reglog = new Reglog();

if (isset($_POST["boton"])) {
    $nombre   = $_POST['name'];
    $apellidos= $_POST['surname'];
    $email    = $_POST['email'];
    $clave    = $_POST['password'];

    if ($nombre == "" || !ctype_alpha($nombre) ||  $apellidos == "" || $email == "" || $clave == "") {
        echo "<script>
                alert('Datos vacíos.');
                window.location = '../vistas/registrar.php';
            </script>";
    } else {

        $clavehash = password_hash($clave, PASSWORD_DEFAULT);
        $respuesta = $reglog->Registrar($nombre, $apellidos, $email, $clavehash);

        if ($respuesta) {
            $log = $reglog->Login($email, $clave);
            foreach ($log as $fila) {
                $nombre    = $fila[1];
                $estado    = $fila[5];
                $id        = $fila[0];
                $apellidos = $fila[2];
                $correo    = $fila[3];
            }

            session_start();
            $_SESSION["cli_nombre"] = $nombre;
            $_SESSION["cli_estado"] = $estado;
            $_SESSION["cli_id"]     = $id;
            $_SESSION["cli_apellidos"]= $apellidos;
            $_SESSION["cli_email"]    = $correo;

            echo "<script>
                    window.location = '../vistas/tienda.php';
                </script>";

        } else {
            echo "<script>
                    alert('Datos erróneos.');
                    window.location = '../vistas/registrar.php';
                </script>";
        }
    }
}

if (isset($_POST["login"])) {
    
    $email = $_POST['email'];
    $clave = $_POST['pass'];

    if ($email == "" || $clave == "") {
        echo "<script>
                alert('Datos vacíos.');
                window.location = '../vistas/login.php';
            </script>";
    } else {
        $respuesta = $reglog->Login($email, $clave);
        if ($respuesta) {
            foreach ($respuesta as $fila) {
                $nombre    = $fila[1];
                $estado    = $fila[5];
                $id        = $fila[0];
                $apellidos = $fila[2];
                $correo    = $fila[3];
            }
            
            session_start();
            $_SESSION["cli_nombre"]   = $nombre;
            $_SESSION["cli_estado"]   = $estado;
            $_SESSION["cli_id"]       = $id;
            $_SESSION["cli_apellidos"]= $apellidos;
            $_SESSION["cli_email"]    = $correo;
            
            echo "<script>
                    window.location = '../vistas/tienda.php';
                </script>";
        } else {
            echo "<script>
                    alert('Datos erróneos.');
                    window.location = '../vistas/login.php';
                </script>";
        }
    }
}
