<?php
session_start();
include('veri_login.php');
?>
<!doctype html>
<html>
<head>
	<title>cadastro de Turmas</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="assets/css/cadatu.css" />
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
<div class="barra">Cadastro de Turma</div>
<section class="geral">
	<div class="content">
		<div class="cadastro">
			<div>
				<a class="lis" href="listagem_turmas.php"><button class="lis">Lista de Turmas</button></a>
			</div>
			<form method="POST" action="cad_turma.php" enctype="multipart/form-data">
				<div class="form">
					<div class="cad">
						<input class="in1" type="text" name="nometurma" required placeholder="Nome da Turma"/>
						<div class="sim-nao"> Status da Turma
							<input id="sim-nao" name="status" class="sim-nao_checkbox" type="checkbox" />
							<label for="sim-nao" name="status" class="sim-nao_botao"></label>
						</div>
					</div>
					<div class="cad">
						<select class="int6" name="turno"placeholder="turma">
							<option>Selecione o Turno </option>
							<option>Manha</option>
							<option>Tarde</option>
							<option>Noite</option>
						</select>
						<br/>
						<input class="in7" type="date" name="datainicio" value="Data de inicio " required placeholder="Data de inicio"/>Data de inicio
						<br/>
					</div>
					<div class="cad">
						<input class="in10" type="date" name="datatermino" required placeholder="data de termino"/>Data de termino
						<input class="in11" type="velue" name="valor" required placeholder="Valor da Mensalidade"/>
					</div>
				</div>

				<div class="menudow">
					<div class="contentmenu">
						<input class="in13" type="submit" value="Salvar"/>
						
						<div class="contentmen">
							<input class="in14" type="reset" name="limpar" value="Cancelar">
						</div>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
	
</body>
</html>