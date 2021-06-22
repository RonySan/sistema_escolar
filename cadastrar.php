<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conectar, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conectar, trim($_POST['usuario']));
$email= mysqli_real_escape_string($conectar, trim($_POST['email']));
$senha = mysqli_real_escape_string($conectar, trim(md5($_POST['senha'])));


$msql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conectar, $msql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['USUARIO_EXISTE'] = true;
	header('location:cadastro.php');
	exit();

} 
$msql = "INSERT INTO usuario (usuario, senha, nome, email, data_cadastro) VALUES ('$usuario','$senha', '$nome', '$email', NOW())";

if($conectar->query($msql) === TRUE) {
	$_SESSION['STATUS_CADASTRO'] = true;	
}

$conectar->close();

header('location:index.php');
exit();
?>
