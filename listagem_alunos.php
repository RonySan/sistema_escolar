<?php
session_start();
ob_start();
include('veri_login.php');
include('conexao.php');
?>
<!doctype html>
<html>
<head>
	<title>Listagem de Alunos</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial=1,shrink-to-fit=no"/> 
	<link rel="stylesheet" href="assets/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/css/stylelist.css" />
	 
</head>
<header>
	<div class="container">
			<div class="logo">

			</div>
			<div class="menu">
				<nav>
					
					<ul>
						<li><A HREF="painel.php"><?php
                    if(isset($_SESSION['nome'])):
                     echo $_SESSION['nome'];
                    ?>
                    <?php
                    endif;
            		?>
            	</A></li>
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
<section class="geral">
	<div class="content1">
		<div class="table">
			<table id="alunos"class="table table-bordered table table-hover table table-sm">
				<div class="pesquisa"> 
					<form class="pesq" method="post" action="visualizar.php">pesquisar
						<input class="in13" type="text" name="pesquisar">
					
						<input class="in14" type="submit" value="busca">
						<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}?>

					</form>
					
				</div>
				<thead>
						<tr>
							<th>ID</th>
							<th>Nome do aluno</th>
							<th>Email</th>
							<th>Valor da mensalidade</th>
							<th>Matriculado</th>
							<th>visualizar,editar</th>

						</tr>
					</thead>
					
					<?php
					
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
						?>
					
					<tbody>
						<tr>
							<th><?php echo $row_alunos['id'] . "</br>";?></th>
							<td><?php echo $row_alunos['nome_aluno'] . "</br>";?></td>
							<td><?php echo $row_alunos['email'] . "<br>";?></td>
							<td><?php echo $row_alunos['valor_mensalidade'] . "<br>";?></td>
							<td><?php echo $row_alunos['matricula'] . "</br>";
								$matricula=['matricula'] ;
							if ($row_alunos['matricula'] = $matricula) {
								echo "matricula";
							}
							?>

							</td>

							<td><?php echo "<a class='lis' href='visualizar.php?id=$row_alunos[id] '>Visualizar</a> </br><hr>";?></td>
						</tr>
						</tbody>
						<div class="paginacao">
								<?php
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
							echo "<a class='lis' href='listagem_alunos.php?pagina=1'>Primeira</a> ";
							
							for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
								if($pag_ant >= 1){
									echo "<a href='listagem_alunos.php?pagina=$pag_ant'>$pag_ant</a> ";
								}
							}
								
							echo "$pagina ";
							
							for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
								if($pag_dep <= $quantidade_pg){
									echo "<a class='lis' href='listagem_alunos.php?pagina=$pag_dep'>$pag_dep</a> ";
								}
							}
							
							echo "<a class='lis' href='listagem_alunos.php?pagina=$quantidade_pg'>Ultima</a>";
							?>
					</div>
				</table>
				<div class="botoncadastro">
					<a href="cadastrodealunos.php"><button class="cadas">novo cadastro</button></a>
				</div>
		</div>
	</div>
</section>
	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
</body>

</html>		
				
			
