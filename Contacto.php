<?php

if (isset($_GET['error']))
{
   if ($_GET['error'] == 1)
   {
       echo 'Debes llenar todos los campos. <br /><br /><br />';
   }

   else if ($_GET['error'] == 2)
   {
       echo 'El email no esta bien escrito. <br /><br /><br />';
   }

   else if ($_GET['error'] == 3)
   {
       echo 'El nombre no tiene un formato valido. <br /><br /><br />';
   }

   else if ($_GET['error'] == 4)
   {
       echo 'El nombre de tu mascota no tiene un formato valido. <br /><br /><br />';
   }

   else if ($_GET['error'] == 5)
   {
       echo 'El telefono debe contener almenos 6 digitos. <br /><br /><br />';
   }

   else if ($_GET['error'] == 6)
   {
       echo 'El mensaje debe contener mas de 2 caracteres. <br /><br /><br />';
   }

unset ($_GET['error']);

}

?>


<html>
<head>
		<meta charset="UTF-8">

 		<title>Contactanos</title>

 		<link href="css/Estilo Contacto.css" rel="stylesheet" type="text/css">
 		<link href="Fonts.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="Contenedor"><!--div principal-->

		<div class="Encabezado"><!-- Codigo del encabezado-->

				<img src="Imagenes/logo ava_Encabezado.png">

				<div class="Ladoder">

					<img src="Imagenes/ava_encabezado.png" width="130%" height="20%">

					<div class="Boton">

						<a href="index.html" class="boton">
							<span class="icon-home3"></span>
							Inicio
						</a>

						<a href="Promo.html" class="boton">
							<span class="icon-new"></span>
							Promociones
						</a>

						<a href="Conocenos.html" class="boton">
							<span class="icon-hand2"></span>
							Conocenos
						</a>

						<a href="Servicios.html" class="boton">
							<span class="icon-megaphone5"></span>
							Servicios
      			</a>

						<!-- <a href="#" class="boton">
							<span class="icon-v-card"></span>
							Contacto
						</a> -->

					</div>

			  </div>

		</div>

		<div class="Contacto">

        <div class="Contacto2">
          <form action="Enviar_al_correo.php" method="POST">
            <label>Nombre: </label><br><input type="text" name="Nombre"><br />
            <label>Mascota: </label><br><input type="text" name="Mascota"><br />
            <label>E-mail: </label><br><input type="text" name="Correo"><br />
            <label>Telefono: </label><br><input type="text" name="Telefono"><br />
            <label>Mensaje: </label><br><textarea type="text" name="Mensaje" maxlength="1000" cols="40" rows="6"></textarea><br>
            <input type="submit" value="Enviar">
          </form>
        </div>

        <div class="Mapa">

					<img src="Imagenes/mapa.png">

				</div>

			</div>

		<div class="Piepag"> <!--Pie de pagina-->

			<a href="Politicas de privacidad.html">Politicas de privacidad.</a><br>
			2017 AVA veterinaria

		</div>

		<div class="Piepag2"> <!--Pie de pagina-->

			Marketing and desing by <a href="http://www.digitalfanovi.com"><img src="Imagenes/DF.png">igital Fanovi</a>

		</div>

	</div>

</body>
</html>
