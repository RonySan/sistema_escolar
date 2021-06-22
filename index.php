<?php
session_start();
?>
<!DOCTYPE html>
<hrml>
<head>
	<title>Tela de login</title>
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
			<?php
                    if(isset($_SESSION['STATUS_CADASTRO'])):
                    ?>
                    <div class="notification">
                      <p>Usuário cadastrado com susseco !!!.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['STATUS_CADASTRO']);
            ?>
            <?php
                    if(isset($_SESSION['aviso'] )):
                    ?>
                    <div class="avisocad">
                      <p>Usuario ou senha Invalido!!!.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['aviso']);
            ?>
			<div class="aria_de_login">

				<form action="login.php" method="POST">
		
					<input class="in1" type="text" name="usuario" required placeholder="Usuario ou email"/>
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