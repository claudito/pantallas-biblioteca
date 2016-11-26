<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Plantilla</title>
<?php include('enlaces.php'); ?>
<meta http-equiv="refresh"  content="20000000000">
<style>
table{font-size: 10px;}
</style>
</head>
<body>
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Nuevo Registro:</strong> Los nuevos registros estan identificados por el estado INACTIVO,para poder activarlos click en el botón del estado. 
    <i class="fa fa-hand-o-down fa-2x" aria-hidden="true"></i>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">
	<table id="consulta"  class="table table-condensed table-bordered">
		<thead>
			<tr class="active">
				<th>Id</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Correo Electrónico</th>
				<th>Celular o Telefóno</th>
				<th>Cóigo Universidad</th>
				<th>Fecha de Registro</th>
				<th>Estado</th>
				<th><i class="fa fa-check-circle fa-2x" aria-hidden="true"></i></th>
			</tr>
		</thead>
		<tbody>
		    <tr>
				<td>2</td>
				<td>Maria </td>
				<td>tello</td>
				<td>maria.tello@gmail.com</td>
				<td>01 345 789</td>
				<td>1409000055</td>
				<td>02/11/2016 20:00:12 pm</td>
				<td>
				<a class="btn btn-warning btn-xs btn-block" data-toggle="modal" href='#modal-id'>Inactivo</a>
				</td>
				<td><i class="fa fa-lock fa-2x text-warning aria-hidden="true"></i></td>
			</tr>
			<tr>
				<td>1</td>
				<td>Luis Augusto</td>
				<td>Claudio Ponce</td>
				<td>megabyte1507@gmail.com</td>
				<td>997 935 085</td>
				<td>1107000044</td>
				<td>01/11/2016 10:00:12 am</td>
				<td><button class="btn btn-primary btn-xs btn-block">Activo</button></td>
				<td><i class="fa fa-check-circle fa-2x text-primary" aria-hidden="true"></i></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
</body>
</html>




<div class="modal fade" id="modal-id">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Confirmar Usuario <i class="fa fa-user"></i></h4>
			</div>
			<div class="modal-body">
			¿Esta seguro de cambiar el estado del usuario seleccionado?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
</div>