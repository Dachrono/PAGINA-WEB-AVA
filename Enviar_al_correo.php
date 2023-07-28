<?php

if
(
 !empty($_POST['Nombre']) and
 !empty($_POST['Mascota']) and
 !empty($_POST['Correo']) and
 !empty($_POST['Telefono']) and
 !empty($_POST['Mensaje'])
)

    {
      $nombre = $_POST['Nombre'];
      $mascota = $_POST['Mascota'];
      $correo = $_POST['Correo'];
      $telefono = $_POST['Telefono'];
      $mensaje = $_POST['Mensaje'];

      $correo_mal = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
      $texto_mal = "/^[A-Za-z .'-]+$/";

     if (!preg_match($correo_mal, $correo))
      {
        header('location: Contacto.php?error=2');
      }

     if (!preg_match($texto_mal, $nombre))
      {
        header('location: Contacto.php?error=3');
      }

     if(!preg_match($texto_mal, $mascota))
      {
        header('location: Contacto.php?error=4');
      }

     if(strlen($telefono) < 6)
      {
        header('location: Contacto.php?error=5');
      }

     if(strlen($mensaje) < 2)
      {
        header('location: Contacto.php?error=6');
      }


    $email_to = 'sistemas@digitalfanovi.com';

    $email_subjet = 'Correo desde AVA Veterinaria';

    $email_message = "Contenido del Mensaje. \n";

    $email_message = "Nombre: ", $nombre, "\n";

    $email_message = "Apellido: ", $mascota, "\n";

    $email_message = "Email: ", $correo, "\n";

    $email_message = "Teléfono: ", $telefono, "\n";

    $email_message = "Mensaje: ", $mensaje, "\n";



    $headers = 'From: '.$correo."\r\n". 'Reply-To: '.$correo."\r\n" .'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);

    }

else
{
   header ('location: Contacto.php?error=1');
}

?>

<?php

<p style="text-align: center">Gracias! Nos pondremos en contacto contigo a la brevedad.</p>
<p style="text-align: center">&nbsp;</p>
<p style="text-align: center"><a href="index.html"><img src="Imagenes/Logo_Contacto.png" width="270" height="300"  alt=""/></a></p>
<p style="text-align: center">&nbsp;</p>
<p style="text-align: center">Da clic en nuestro logo para volver a la pagina principal.</p>

?>
