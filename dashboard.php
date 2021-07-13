<?php
	session_start();
	include('veri_login.php');
	include('conexao.php');


?>
<?php
$lista = array();
$valor = array();
$cor = array();
$cor[0] = '#ddabf7';
$cor[1] = '#7e41fa';
$cor[2] = '#4186fa';
$cor[3] = '#41fa52';
$i = 0;
$sql = "SELECT * FROM alunos WHERE id";
$result = mysqli_query($conectar,$sql);
while ($row = mysqli_fetch_object($result)) {
  $aluno = $row->id;
  $matricula = $row->matricula;
  $lista[$i] = $aluno;
  $valor[$i] = $matricula;
  $i = $i + 1;
}


?>

<html>
 <head>
  <title>Bem vindo Painel central </title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
  <link rel="stylesheet" href="assets/css/grid.scss"/>
  <link rel="stylesheet" href="assets/css/painel.css"/>

   <script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  google.charts.load('current', {packages: ['corechart']});
  google.charts.setOnLoadCallback(drawChart);
</script>
</head>
<body>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
       
       <?php
        $k = $i;
        for ($i = 0; $i < $k; $i++) {
        ?>
        ['<?php echo $lista[$i]?>',<?php echo $valor[$i] ?>, '<?php echo $cor[$i] ?>'],
        <?php } ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
</body>

</html>
