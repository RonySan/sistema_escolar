<?php
session_start();
include('veri_login.php');
//include('assets/js/dashbord.js')
?>
<html>
<head>
	<title>Bem vindo Painel central </title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
	<link rel="stylesheet" href="assets/css/grid.scss"/>
	<link rel="stylesheet" href="assets/css/painel.css"/>
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
	<section class="geral">
		<div class="option0-content">
		    <div class="conteiner column">

				<div class="option1">
					<div class="grafico">
						<h2>Grafico</h2>
					</div>
					<div>
						<a class="linkpainel" href="dashboard.php">
							<button class="buttonpainel">Dashboard</button>

						<div id="myPieChart"/></div>
					</a>
					</div>

				</div>

				<div class="option2">
					<div>
						<div class="alunos">
							<h2>Alunos</h2>
						</div>
						<div>
							<button class="buttonpainel"><a class="linkpainel" href="cadastrodealunos.php">Cadastrar Aluno</a></button>
						</div>
					</br>
						<div>
							<button class="buttonpainel"><a class="linkpainel" href="listagem_alunos.php">Lista de Alunos</a></button>
						</div>
					</br>
					</div>
				</div>

				<div class="option3">
					<div class="usuarios">
						<h2>Usuarios</h2>
						<div>
							<button class="buttonpainel"><a class="linkpainel" href="cadastrodeturma.php">Cadastrar nova turma</a></button>
						</div>
					</br>

						<div>
							<button class="buttonpainel"><a class="linkpainel" href="listagem_turmas.php">Lista de Turmas</a></button>
						</div>
					</br>
					</div>

				</div>
			</div>
		</div>
	</section>
	<div class="content">

	</div>

</body>
</html>
