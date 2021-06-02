<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aria de Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=divice-width,initial-scale=1,shrink-to-fit=no"/>
	<link rel="stylesheet" href="assets/css/stylecad.css">

</head>
<body>
<section>
		<div class="content_left">
			<div class="aria_texto">
				<h1>Seja bem vindo!</h1>
				<h2>preencha os campos para se cadastrar!</h2>
			</div>
		</div>
		<div class="content">
			<div class="aria_de_cadastro">
				<form action="cadastrar.php" method="POST">

					<input class="in1" type="text" name="nome" required placeholder="nome"/>
					<br/><br/>
					<input class="in2" type="text" name="usuario" required placeholder="Usuario"/>
					<br/><br/>
					<input class="in3" type="password" name="senha" required placeholder="*******"/>
					<br/><br/>
					<input class="in4" type="submit" name="cadastrar" value="Cadastrar" />

				</form>
				<div class="areabotton">
					<a href="index.php"><button class="index">Fazer login</button></a>
				</div>
			</div>
		</div>
	</section>

</body>
</html>