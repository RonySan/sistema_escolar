<?php
session_start();
ob_start();
include_once ('conexao.php');

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: #f00; font-size:15px; margin:0px; padding:0px;'>Erro Aluno nao encontrado!</p>";
    header('location: listagem_alunos.php');
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
        <a href="listagem_alunos.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>

        <h1>Visualizar</h1>
        <?php
        $query_alunos = "SELECT email, sexo, cod_matricula, matricula, turma, nome_pai, nome_mae, data_nascimento, valor_mensalidade, endereco, nome_aluno, foto
                         FROM alunos WHERE id = $id LIMIT 1 ";
        $result_aluno = $conectar->prepare($query_alunos);
        $result_aluno->execute();

        if (($result_aluno) and ($result_aluno->rowCount() !=0 )) {
            $row_aluno = $result_aluno->fetch(pdo::fetch_assoc);
        }
        ?>
    </body>
</html