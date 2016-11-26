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

<br>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Lista de Usuarios Registrados</h3>
	</div>
	<div class="panel-body">
		<table id="consulta"  class="table table-condensed table-bordered">
		<thead>
			<tr class="active">
				<th>Id</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Correo Electrónico</th>
				<th>DNI</th>
				<th>Celular o Telefóno</th>
				<th>Cóigo Universidad</th>
				<th>Fecha de Registro</th>
				<th>Tipo</th>
				<th>Estado</th>
				<th><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></th>
				
			</tr>
		</thead>
		<tbody>
		    <tr>
				<td>2</td>
				<td>Maria </td>
				<td>tello</td>
				<td>maria.tello@gmail.com</td>
				<td>72456790</td>
				<td>01 345 789</td>
				<td>1409000055</td>
				<td>02/11/2016 20:00:12 pm</td>
				<td><button class="btn btn-default btn-xs">Usuario</button></td>
				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id'>Activo</a>
				</td>
				<td><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Luis Augusto</td>
				<td>Claudio Ponce</td>
				<td>megabyte1507@gmail.com</td>
				<td>46794282</td>
				<td>997 935 085</td>
				<td>1107000044</td>
				<td>01/11/2016 10:00:12 am</td>
				<td><button class="btn btn-default btn-xs">Administrador</button></td>
				
				<td><button class="btn btn-primary btn-xs">Activo</button></td>
				<td><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></td>
				
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




<div class="modal fade" id="modal-id">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar información <i class="fa fa-user"></i></h4>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-md-4">
			<div class="form-group">
			<label>Nombres</label>
			<input type="text" value="Luis Augusto" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Correo Electrónico</label>
			<input type="text" value="megabyte1507@gmail.com" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Código Universidad</label>
			<input type="text" value="1107000044" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Tipo</label>
			<select name="" id="" class="form-control">
			<option value="">Administrador</option>
			<option value="">Usuario</option>
			</select>
			</div>
			<div class="form-group">
			<label>Usuario</label>
			<input type="text" name="" class="form-control" value="1107000044">
			</div>
			
			</div>
			<div class="col-md-4">
			<div class="form-group">
			<label>Apelllidos</label>
			<input type="text" value="Claudio Ponce" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Celular o Telefóno</label>
			<input type="text" value="997 935 085" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Fecha de Registro</label>
			<input type="text" value="01/11/2016 10:00:12 am" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Estado</label>
			<select name="" id="" class="form-control">
			<option value="">Activo</option>
			<option value="">Inactivo</option>
			</select>
			</div>
			<div class="form-group">
			<label>Contraseña</label>
			<input type="password" name="" class="form-control" value="1107000044">
			</div>
			</div>
			<div class="col-md-4">
			<div class="form-group">
			<label>Dni</label>
			<input type="text" value="46794282" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Cargo</label>
			<input type="text" value="Administrador" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Fecha de Nacimiento</label>
			<input type="text" value="15/07/1991" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Especialidad</label>
			<input type="text" value="Ing de Sistemas" class="form-control input-sm">
			</div>
			<div class="form-group">
			<label>Turno</label>
			<select name="" id="" class="form-control">
			<option value="">Noche</option>
			<option value="">Día</option>
			</select>
			</div>
			
			</div>
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary">Actualizar Información</button>
			</div>
		</div>
	</div>
</div>