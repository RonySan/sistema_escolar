<?php
session_start();
?>
<!DOCTYPE html>
<hrml>
<head>
	<title>tela de login</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=divice-width,initial-scale=1,shrink-to-fit=no"/>
	<link rel="stylesheet" href="assets/css/style.css"/>

</head>
<body>
	<section>
		<div class="content_left">
			<div class="aria_texto">
				<h1>Seja bem vindo!</h1>
				<h2>entre ou faca o cadastro para matricular!</h2>
			</div>
		</div>
		<div class="content">
			
			<div class="aria_de_login">
				<form action="login.php" method="POST">

					<input class="in1" type="text" name="usuario" required placeholder="Username"/>
					<br/><br/>
					<input class="in2" type="password" name="senha" required placeholder="*******"/>
					<br/><br/>
					<input class="in3" type="submit" name="entrar" value="Entrar" />

				</form>
				<div class="areabotton">
					<a href="cadastro.php"><button class="cadastro">Cadastre-se</button></a>
				</div>
			</div>
		</div>
	</section>
</body>
</html>