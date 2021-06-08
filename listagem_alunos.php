<?php
session_start();
include('veri_login.php');
include('conexao.php');
?>
<!doctype html>
<html>
<head>
	<title>Listagem de Alunos</title>
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
<div class="barra">Listagem de Alunos</div>
<section class="geral">
	<div class="contente">
		<div class="listagem">
			<div class="por">***</div>
			<div class="pesquisa">///</div>
			<div class="apenas">---</div>
		</div>
		<div class="lista">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 4;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_alunos = "SELECT * FROM alunos LIMIT $inicio, $qnt_result_pg";
		$resultado_alunos = mysqli_query($conectar, $result_alunos);
		while($row_alunos = mysqli_fetch_assoc($resultado_alunos)){
			echo "ID: " . $row_alunos['id'] . "<br>";
			echo "Nome: " . $row_alunos['nome_aluno'] . "<br>";
			echo "E-mail: " . $row_alunos['email'] . "<br><hr>";
		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM alunos";
		$resultado_pg = mysqli_query($conectar, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='listagem_alunos.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='listagem_alunos.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='listagem_alunos.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='listagem_alunos.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>
		</div>
		<div class="pagina">
			<div class="matricula">matricula</div>
			<div class="paginacao"> <12345>> </div>
		</div>
	</div>
</section>
</SECTION>
</body>