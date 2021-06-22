<?php
session_start();
include('veri_login.php');
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
<div class="barra">Cadastro de aluno</div>
<section class="geral">
	<div class="content">
		<div class="cadastro">
			<div>
				<a class="lis" href="listagem_alunos.php"><button class="lis">Lista de Alunos</button></a>
			</div>
			<form method="POST" action="cad_alunos.php" enctype="multipart/form-data">
				<div class="form">
					<div class="cad">
							<input class="in1" type="text" name="nomealuno" required placeholder="Nome do Aluno"/>
						
						<div class="foto">
							<input class="in2" type="file" name="foto" required placeholder="foto" value="adcione uma Foto"/>
						</div>
						
							<select class="int3" name="sexo"placeholder="sexo">Sexo
								<option>sexo</option>
								<option>Masculino</option>
								<option>Feminino</option>
								<option>Outros</option>
							</select>
						<br/>
						<input class="in4" type="email" name="email" required placeholder="email"/>

						<input class="in5" type="text" name="matricula" required placeholder=""/>

					</div>
					<div class="cad">
						<select class="int6" name="turma"placeholder="turma">
							<option>defina a turma</option>
							<option>A</option>
							<option>B</option>
							<option>C</option>
						</select>
						<br/>
						<input class="in7" type="date" name="datamatricula" value="Data de Matricula" required placeholder="Data de Nascimento"/>Data de matricula
						<br/>
						<input class="in8" type="text" name="npai" required placeholder="Nome Completo do Pai"/>

						<input class="in9" type="text" name="nmae" required placeholder="Nome Completo da Mãe"/>
					</div>
					<div class="cad">
						<input class="in10" type="date" name="datanascimento" required placeholder="data de nascimento"/>Data de Nascimento
						<input class="in11" type="velue" name="valor" required placeholder="Valor da Mensalidade"/>
						<input class="in12" type="text" name="endereco" required placeholder="Bairro"/>
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