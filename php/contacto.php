<?php
	$nombre = $_POST['nombre'];
	$peticion  = $_POST['peticion'];
	
	if(empty($_POST['correo'])) {
		$correo='vacio';
	} else {
		$correo=$_POST['correo'];
	}

	if(empty($_POST['tel'])) {
		$tel='tel vacio';
	} else {
		$tel=$_POST['tel'];
	}

	echo $tel;
?>