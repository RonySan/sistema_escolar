<?php

define('HOST','127.0.0.1');
define('usuarios','root');
define('senha','root');
define('MariaDB','login');

$conectar = mysqli_connect(HOST, usuarios, senha, MariaDB) or die ('Arquivo não encontrado');

/*$conexao = new PDO("mysql?:dbname=login;host=localhost", "root","123");*/
?>
