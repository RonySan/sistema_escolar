<?php
session_start();
include('veri_login.php');
include('conexao.php');
?>
<!doctype html>
<html>
<head>
	<title>cadastro de alunos</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="assets/css/cadalu.css" />
</head>
<header>
	<div class="container">
			<div class="logo">

			</div>
			<div class="menu">
				<nav>
					
					<ul>
						<li><A HREF="">ola Rony!!</A></li>
						<li><a href="">perfil</a></li>
						<li>
							<a href="logout.php">
								<button>Sair</button>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		
	</div>
	
</header>
<body>
<div class="barra">Listagem de aluno</div>
<SECTION id="lista">
	<div class="list">
		<?php
		if (isset($_SESSION['STATUS_CADASTRO'])) {
			echo $_SESSION['STATUS_CADASTRO'];
			unset($_SESSION['STATUS_CADASTRO']);
			
		}


		$pagina_atual = filter_input(INPUT_GET, 'pagina');
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

	 	//CALCULO VISUALIZACAO

		$qunt_resul_pg = 6;

		$inicio = ($qunt_resul_pg * $pagina) - $qunt_resul_pg;


		$result_alunos = "SELECT * FROM alunos LIMIT $inicio, $qunt_resul_pg";
		$resultado_alunos = mysqli_query($conectar, $result_alunos);
		while ($row_alunos = mysqli_fetch_assoc($resultado_alunos)) {

			echo "id: ".$row_alunos['id']."<br/>";
			echo "Nome: ".$row_alunos['nome_aluno']."<br/>";
			echo "Email: ".$row_alunos['email']."<br/><hr>"; 
			
		}
		?>
	</div>
</SECTION>
</body>