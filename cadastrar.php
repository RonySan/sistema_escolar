<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conectar, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conectar, trim($_POST['usuario']));
$email= mysqli_real_escape_string($conectar, trim($email['email']));
$senha = mysqli_real_escape_string($conectar, trim(md5($_POST['senha'])));


$msql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conectar, $msql);
$row = mysqli_fetch_assoc($result);

if($row['usuario'] == 1) {
	$_SESSION['USUARIO_EXISTE'] = true;
	header('localtion: index.php');
	exit;

} 
$msql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario $email', '$senha', NOW())";

if($conectar->query($msql) === true) {
	$_SESSION['STATUS_CADASTRO'] = TRUE;
	
} else {
		echo "Usuario cadastrado com sucesso!!";	}

$conectar->close();

header('location:index.php');
exit;
?>
