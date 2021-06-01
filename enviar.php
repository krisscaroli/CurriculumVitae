<?php
//Llamando a los campos
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensaje = $_POST['mensaje'];

//Correo
$destinatario="sdckrissminano@gmail.com";

$asunto= "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Teléfono: $celular \n";
$carta .=  "Empresa: $empresa \n";
$carta .= "Mensaje: $mensaje \n";

//enviando mensaje
$header ="From: $email";
mail($destinatario,$asunto,$carta,$header );

echo "<script>alert('Registro enviado exitosamente. Gracias por ponerte en contacto.')</script>";

echo "<script>document.getElementById('mensaje').innerHTML='Registro exitoso';
</script>";

echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

//header('Location:index.html');
?>