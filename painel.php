<?php
session_start();
include('veri_login.php');
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
	<section class="geral">
		<div class="option0-content">
		    <div class="conteiner column">

				<div class="option1">
					<div class="grafico">
						<h2>Grafico</h2>
					</div>
					<div></div>
				</div>

				<div class="option2">
					<div>
						<div class="alunos">
							<h2>Alunos</h2>
						</div>
						<div><a href="cadastrodealunos.php">Cadastrar Aluno</a></Sdiv>
					</div>
				</div>

				<div class="option3">
					<div class="usuarios">
						<h2>Usuarios</h2>
						<div>

						</div>
					</div>
				</div>
			</div>
	</div>
	</section>
	<div class="content">

	</div>
	<script type="text/javascript" scr="assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" scr="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
