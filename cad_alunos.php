<?php
session_start();
include("conexao.php");

$nomealuno = mysqli_real_escape_string( $conectar, trim($_POST['nomealuno']));
$foto = mysqli_real_escape_string($conectar, ($_POST['foto']));
$sexo = mysqli_real_escape_string($conectar, trim($_POST['sexo']));
$email = mysqli_real_escape_string($conectar, trim($_POST['email']));
$turma = mysqli_real_escape_string($conectar, trim($_POST['turma']));
$datamatricula = mysqli_real_escape_string($conectar, trim($_POST['datamatricula']));
$npai = mysqli_real_escape_string($conectar, trim($_POST['npai']));
$nmae = mysqli_real_escape_string($conectar, trim($_POST['nmae']));
$datanascimento = mysqli_real_escape_string($conectar, trim($_POST['datanascimento']));
$valor = mysqli_real_escape_string($conectar, trim($_POST['valor']));
$endereco = mysqli_real_escape_string($conectar, trim($_POST['endereco']));
$matricula = mysqli_real_escape_string($conectar, trim($_POST['matricula']));
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
$sql = "INSERT INTO alunos (email, sexo, cod_matricula, matricula, turma, nome_pai, nome_mae, data_nascimento, valor_mensalidade, endereco, nome_aluno, foto)
					VALUES ('$email', '$sexo', '$cod_matricula', '$matricula', '$turma', '$npai', '$nmae', '$datanascimento', '$valor', '$endereco', '$nomealuno', '$foto')"; 

	if ($conectar->query($sql) === true) {
		$_SESSION['STATUS_CADASTRO' . "Aluno cadastrado com susseco !! "] = true;
	}
$conectar->close();
	$_SESSION['msgcon'. "cadastro concluido"] ;
	header('location:listagem_alunos.php');
	
	exit;