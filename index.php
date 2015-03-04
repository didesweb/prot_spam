<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Didesweb, proteger el correo de los spambots</title>
	<!-- Didesweb -->  
	<!-- Diseño y desarrollo web -->  
	<!-- http://didesweb.com/-->  
	<!-- Este obra está protegida bajo licencia Creative Commons Attribution --> 
</head>
<body>
	<h1>&copy; Didesweb, proteger el correo de los spambots</h1>
	<?php 
		function proteger_mail_spam($direccion_correo) {
			$correo_encriptado = bin2hex("$direccion_correo");
			$correo_encriptado = chunk_split($correo_encriptado, 2, '%');
			$correo_encriptado = '%' . substr($correo_encriptado, 0, strlen($correo_encriptado) - 1);
			return $correo_encriptado; 
		}
		$correo_real ='tunombre@tudominio.com';
		$email = proteger_mail_spam($correo_real);
		echo '<a href="mailto:'.$email.'">Contactar</a>';
	?>
</body>
</html>
