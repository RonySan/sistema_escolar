<?php
session_start();
include("conexao.php");

$nomedaturma = mysqli_real_escape_string( $conectar, trim($_POST['nometurma']));
$statusdaturma = mysqli_real_escape_string($conectar, trim($_POST['turmacancelada']));
$turno = mysqli_real_escape_string($conectar, trim($_POST['turno']));
$datainicio = mysqli_real_escape_string($conectar, trim($_POST['datainicio']));
$datatermino = mysqli_real_escape_string($conectar, trim($_POST['datatermino']));
$valor = mysqli_real_escape_string($conectar, trim($_POST['valor']));
/*
$sql = "select count(*) as total from alunos = '$email'";
$result = mysqli_query($conectar, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['USUARIO_EXISTE'] = true;
	header('localtion: cadastrodealunos.php');
	exit;
}
*/
$sql = "INSERT INTO `turmas`(`nomedaturma`, `statusdaturma`, `turno`, `datainicio`, `datatermino`, `mensalidade`) 
					VALUES ('$nomedaturma','$statusdaturma','$turno','$datainicio','$datatermino','$valor')"; 

	if ($conectar->query($sql) === true) {
		$_SESSION['STATUS_CADASTRO' . "Turma cadastrado com susseco !! "] = true;
	}
$conectar->close();
	$_SESSION['msgcon'. "cadastro concluido"] ;
	header('location:listagem_turmas.php');
	
	exit;