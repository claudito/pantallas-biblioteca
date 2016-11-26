<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consultas Libros mas Prestados</title>
<?php include('../enlaces.php'); ?>
<script>
$(function () {

    $(document).ready(function () {

        // Build the chart
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Títulos mas Solicitados Agosto 2016'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Título A',
                    y: 56.33
                }, {
                    name: 'Título B',
                    y: 24.03,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Título C',
                    y: 10.38
                }, {
                    name: 'Título D',
                    y: 4.77
                }, {
                    name: 'Título E',
                    y: 0.91
                }, {
                    name: 'Título F',
                    y: 0.2
                }]
            }]
        });
    });
});
</script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-2">
<br><br>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Detalles</h3>
	</div>
	<div class="panel-body">
	    <div class="form-group">
	    <label for="">Fecha de Inicio</label>
		<input type="date" name="" class="form-control">
	    </div>
	    <div class="form-group">
	    <label for="">Fecha de Fin</label>
		<input type="date" name="" class="form-control">
	    </div>
	    
	    <button class="btn btn-success btn-block">Consultar</button>
	</div>
</div>
</div>
<div class="col-md-8">
<br>
<div id="container"></div>
</div>
</div>
</div>
<script src="http://localhost/cdn/highcharts/librerias/highcharts/js/highcharts.js"></script>

<script src="http://localhost/cdn/highcharts/librerias/highcharts/js/modules/exporting.js"></script>
</body>
</html>