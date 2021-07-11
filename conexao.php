<?php
define('HOST','127.0.0.1');
define('usuarios','root');
define('senha','');
define('MariaDB', 'cadastros');

$conectar = mysqli_connect(HOST, usuarios, senha, MariaDB) or die ('Arquivo não encontrado');

