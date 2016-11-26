<?php 

$nombre="Prestamos de Cabinas";

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $nombre; ?></title>
<?php include('enlaces.php'); ?>
<meta http-equiv="refresh"  content="20000000000">
<style>
table{font-size: 10px;}
</style>
</head>
<body>
<div class="container-fluid">

<br>

<div class="row">
<div class="col-md-12">
<p></p>
<div class="table-responsive">
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Solicitud de <?php echo $nombre; ?></h3>
	</div>
	<div class="panel-body">
		<table id="consulta"  class="table table-condensed table-bordered">
		<thead>
			<tr class="active">
				<th>Id</th>
				<th>Usuario</th>
				<th>Cabina</th>
                <th>Fecha</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Hora Fin Entrega</th>
                <th>Comentario</th>
				<th>Estado</th>
				<th><a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar Solicitud</a></th>
				
				
			</tr>
		</thead>
		<tbody>
		    <tr>
				<td>2</td>
				<td>Luis Claudio Ponce</td>
				<td>Cabina #1</td>
				<td>12-10-2016</td>
				<td>08:00</td>
				<td>09:00</td>
				<td>09:15</td>
				
				<td>Acompañantes:Juan Perez y Micky Torres</td>
				<td><button class="btn btn-xs btn-default btn-block">FINALIZADO</button></td>
				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar Solicitud</a>
			
				</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Maria Tello</td>
				<td>Cabina #2</td>
				<td>12-10-2016</td>
				<td>10:00</td>
				<td>11:00</td>
				<td></td>
				<td></td>
				<td><button class="btn btn-xs btn-default btn-block">EMITIDO</button></td>
				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar Solicitud</a>
				
				</td>
				
			</tr>
		</tbody>
	</table>
	</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


<div class="modal fade" id="modal-id-actualizar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar <?php echo $nombre; ?></h4>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-md-10">
			<div class="form-group">
			<label>Hora Fin Entrega</label>
			<input type="text" class="form-control" value="11:15 a.m">
			</div>
			<div class="form-group">
			<label for="">Comentario</label>
			<textarea name="" id=""  rows="3" value="" class="form-control">Se entrego la cabina en óptimas condiciones.</textarea>
			</div>
			
			</div>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal-id-registrar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Registrar <?php echo $nombre; ?></h4>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-md-7">
			
			<div class="form-group">
			<label>Hora Fin Entrega</label>.
			<input type="time" class="form-control" value="--">
			</div>
			
			</div>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary">Registrar</button>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="modal-id-eliminar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Eliminar <?php echo $nombre; ?> </h4>
			</div>
			<div class="modal-body">
			<h2>¿Esta seguro de eliminar el registro Seleccionado?</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-danger">Eliminar</button>
			</div>
		</div>
	</div>
</div>