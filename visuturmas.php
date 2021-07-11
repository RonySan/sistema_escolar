<?php
session_start();
ob_start();
include_once ('conexao.php');

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: #f00; font-size:15px; margin:0px; padding:0px;'>Erro Turma nao encontrado!</p>";
    header('location: listagem_turmas.php');
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Visualizar</title>
    </head>
    <body>
        <a href="listagem_turmas.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>

        <h1>Visualizar</h1>
        <?php
        $query_turmas = "SELECT nomedaturma, statusdaturma, turno, datainicio, datatermino, mensalidade FROM turmas WHERE id = $id LIMIT 1 ";
        $result_turmas = $conectar->prepare($query_turmas);
        $result_turmas->execute();

        if (($result_turmas) and ($result_turmas->rowCount() !=0 )) {
            $row_turmas = $result_turmas->fetch(PDO::fetch_assoc);
        }
        ?>
        
        
          </body>
</html