<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
<?php include('../enlaces.php'); ?>
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
<a class="btn btn-primary btn-lg" data-toggle="modal" href='#modal-id-registrar'>Registrar Tipo de Usuario <i class="fa fa-user"></i></a>
<p></p>
<div class="table-responsive">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Mantenimiento de Tipo Usuarios</h3>
	</div>
	<div class="panel-body">
		<table id="consulta"  class="table table-condensed table-bordered">
		<thead>
			<tr class="active">
				<th>Id</th>
				<th>Descripción</th>
				<th>Acciones</th>
				
				
			</tr>
		</thead>
		<tbody>
		    <tr>
				<td>2</td>
				<td>Alumno</td>
				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
				</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Administrador</td>
				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
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
				<h4 class="modal-title">Actualizar Tipo de Usuario</h4>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-md-6">
			<label for="">Descripción</label>
			<input type="text" value="Administrador" id="" class="form-control">
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
				<h4 class="modal-title">Registrar Tipo de Usuario</h4>
			</div>
			<div class="modal-body">
			<div class="form-group">
			<label for="">Descripción</label>
			<input type="text" name="" id="" class="form-control">
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
				<h4 class="modal-title">Eliminar Tipo de Usuario <i class="fa fa-user fa-2x"></i></h4>
			</div>
			<div class="modal-body">
			<h2>¿Esta seguro de eliminar el Tipo de Usuario Administrador?</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-danger">Eliminar</button>
			</div>
		</div>
	</div>
</div>