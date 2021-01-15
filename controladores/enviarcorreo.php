<?php

$Nombre = $_POST['nombre'];
$Email = $_POST['email'];
$Telefono = $_POST['telefono'];
$Mensaje = $_POST['mensaje'];
$archivo = $_FILES['adjunto'];

if ($Nombre=='' || $Email=='' || $Mensaje=='' || $Telefono==''){ 

echo "<script>
    alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require '../public/phpmailer/class.phpmailer.php';
    require '../public/phpmailer/class.smtp.php'; //incluimos la clase para envíos por SMTP
    
    $mail = new PHPMailer();

    $mail->setFrom($Email,$Nombre);
    $mail->addAddress('taipe.marvin17@gmail.com'); //correo a la que le llegaran los correos 
    $mail->addReplyTo($Email,$Nombre);
   
// Aquí van los datos que apareceran en el correo que reciba
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $Nombre \n<br>".    
                        "Email: $Email \n<br>".  
                        "Telefono: $Telefono \n<br>".   
                        "Mensaje: $Mensaje \n<br>";
    $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);   
    
    

// Datos del servidor SMTP

    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com"; //servidor smtp, esto lo puedes dejar igual
    $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
    $mail->Username = 'taipe.marvin17@gmail.com';  // Tu correo gmail
    $mail->Password = 'luzangelica1709'; // Tu contrasena gmail
    
    
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>
