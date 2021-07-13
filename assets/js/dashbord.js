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

    function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable([
        ['mes', 'quantidade']
        <?php
          include 'conexao.php';
          $sql = "SELECT * FROM  alunos";
          $buscar = mysqli_fetch_array($buscar);
        ?>


        ]);
      data.addColumn('string', 'Element');
      data.addColumn('number', 'Percentage');
      data.addRows([
        ['2019', 1.78],
        ['2020', 0.21],
        ['2021', 0.01]
      ]);

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
      chart.draw(data, null);
    }
  </script>
</head>
