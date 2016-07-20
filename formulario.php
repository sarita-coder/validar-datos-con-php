<!DOCTYPE html>
<html lang="es">
<head>
	<title> Valicaci&oacute;n de Datos con PHP</title>
	<meta charset="utf-8"/>
	<script type="" src="index.js"></script>
</head>
<body>
	<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	if($_GET["error"]=="si"){
	echo "<span style=\"color:red; font-size:2em;\">Verifica tus datos </span>";
	}
	?>
	<hgroup><h1> Formulario de Datos GET </h1></hgroup>
	<form name="valida_datos_get_frm" action="validar-datos.php" method="get" enctype="application/x-wwww-form-urlencoded">
		<label>Ingresa tu nombre: </label>
		<input type="text" name="nombre_txt"/>
		<br/><br/>
		<label>Ingresa tu password: </label>
		<input type="password" name="password_txt"/>
		<br/><br/>
		<input type="radio" name="sexo_rdo" value="M" />
		Masculino&nbsp;
		<input type="radio" name="sexo_rdo" value="F" />
		Femenino&nbsp;
		<br/> <br/>
		<input type="hidden" name="enviar_hdn"/>
		<input type="button" id="enviar-get"  name="enviar_btn" value="Enviar x GET" />
	</form>
		<hgroup><h1> Formulario de Datos POST </h1></hgroup>
	<form name="valida_datos_post_frm" action="validar-datos.php" method="post" enctype="application/x-wwww-form-urlencoded">
		<label>Ingresa tu nombre: </label>
		<input type="text" name="nombre_txt"/>
		<br/><br/>
		<label>Ingresa tu password: </label>
		<input type="password" name="password_txt"/>
		<br/><br/>
		<input type="radio" name="sexo_rdo" value="M" />
		Masculino&nbsp;
		<input type="radio" name="sexo_rdo" value="F" />
		Femenino&nbsp;
		<br/> <br/>
		<input type="hidden" name="enviar_hdn"/>
		<input type="button" id="enviar-post"  name="enviar_btn" value="Enviar x POST" />
	</form>

	
</body>
<html>