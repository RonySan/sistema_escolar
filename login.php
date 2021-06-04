<?php
session_start();
include('conectar.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('location: index.php');

	exit();
}

$usuario = mysqli_real_escape_string($conectar, $_POST['usuario']);
$senha = mysqli_real_escape_string($conectar, $_POST['senha']);

/*$query = "select usuario from usuario where usuario = '{$usuario}' and senhas = md5('{$senha}')";*/
$verificador = "select * from usuario where usuario = '{$usuario}' and senha = md5('$senha')";

$result = mysqli_query($conectar, $verificador);

$row = mysqli_num_rows($result);

if($row == 1 ) {
	
	$_SESSION['usuario'] = $usuario;
	header('location: painel.php');
	exit();

} else {
	$_SESSION['aviso'] = 'Usuario ou senha Invalido !!';
	header('location: index.php');
	exit();
}
