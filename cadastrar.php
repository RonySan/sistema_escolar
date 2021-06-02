<?php
session_start();
include("conectar.php");

$nome = mysqli_real_escape_string($conectar, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conectar, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conectar, trim(md5($_POST['senha'])));


$msql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conectar, $msql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['USUARIO_EXISTE'] = true;
	header('localtion: cadastro.php');
	exit;
}
$msql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

if($conectar->query($msql) === true) {
	$_SESSION['STATUS_CADASTRO'] = TRUE;

} 

$conectar->close();
header('location: cadastro.php');
exit;
