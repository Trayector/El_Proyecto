<?php 
require_once("conexion/conexion.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}


input[type="number"] {
	min-width: 50px;
}
		</style>
	</head>
	<body>
<script src="Highcharts-8.0.4/code/highcharts.js"></script>
<script src="Highcharts-8.0.4/code/modules/exporting.js"></script>
<script src="Highcharts-8.0.4/code/modules/export-data.js"></script>
<script src="Highcharts-8.0.4/code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Sistema de Trayectorias Educativas de la Universidad Politécnica de Tulancingo.
    </p>
</figure>


<h1>

        </h1>
        <h1>
        <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'ALUMNOS CON PROMEDIO DE BACHILLERATO DE 9.6 A 10'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
		name: 'ALUMNOS CON PROMEDIO DE BACHILLERATO DE 9.6 A 10',
        data: (function() {
			var data = [];
			<?php

	$sql = "SELECT * FROM respuestas WHERE Pregunta LIKE '¿Promedio del bachillerato?' AND RR LIKE 'R5'";
	$result = mysqli_query($conn, $sql);
	 
	while($registros = mysqli_fetch_array($result)){
		?>
		data.push(['<?php echo $registros["Matricula"] ?>',5.000]);
        //data.push(['<?php echo $registros["Matricula"] ?>',5.000]);
        //data.push(['<?php echo $registros["Matricula"] ?>',10.000]);
        //data.push(['<?php echo $registros["Matricula"] ?>',15.000]);
        //data.push(['<?php echo $registros["Matricula"] ?>',20.000]);
		<?php
		}
	 ?>
                        
                                       
                                    return data;
                     })()  
    }]
});
		</script>
        </h1>
	</body>
</html>
