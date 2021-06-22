<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "cadastros";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array( 
	0 =>'id', 
	1 => 'nome',
	2=> 'email'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_alunos = "SELECT nome_aluno, email, id FROM alunos";
$resultado_alunos =mysqli_query($conn, $result_alunos);
$qnt_linhas = mysqli_num_rows($resultado_alunos);

//Obter os dados a serem apresentados
$result_alunos = "SELECT nome_aluno, email, id FROM alunos WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_alunos.=" AND ( nome LIKE '".$requestData['search']['value']."%' ";    
	$result_alunos.=" OR salario LIKE '".$requestData['search']['value']."%' ";
	$result_alunos.=" OR idade LIKE '".$requestData['search']['value']."%' )";
}

$resultado_alunos=mysqli_query($conn, $result_alunos);
$totalFiltered = mysqli_num_rows($resultado_alunos);
//Ordenar o resultado
$result_alunos.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_alunos=mysqli_query($conn, $result_alunos);

// Ler e criar o array de dados
$dados = array();
while( $row_alunos =mysqli_fetch_array($resultado_alunos) ) {  
	$dado = array(); 
	$dado[] = $row_alunos["nome"];
	$dado[] = $row_alunos["email"];
	$dado[] = $row_alunos["id"];	
	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
