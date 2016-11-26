<?php 

$nombre="Titulos";

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $nombre; ?></title>
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
<a class="btn btn-primary btn-lg" data-toggle="modal" href='#modal-id-registrar'>Registrar <?php echo $nombre; ?></a>
<p></p>
<div class="table-responsive">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Mantenimiento de <?php echo $nombre; ?></h3>
	</div>
	<div class="panel-body">
		<table id="consulta"  class="table table-condensed table-bordered">
		<thead>
			<tr class="active">
				<th>Id</th>
				<th>Código</th>
				<th>Título</th>
				<th>Fecha de Ingreso</th>
				<th>ISBN</th>
				<th>Número de Páginas</th>
				<th>Procedencia</th>
				<th>Año de Publicación</th>
			
				<th>Estado</th>
				
				<th>Acciones</th>
				
				
			</tr>
		</thead>
		<tbody>
		    <tr>
				<td>1</td>
				<td>657.028/A85/2/2010</td>
				<td>IFRS Plan Contable Empresarial</td>
				<td>10/10/1998</td>
				<td>9789972272356</td>
				<td>12</td>
				<td>UPCI</td>
				<td>12/06/1996</td>
				
				<td>Activo</td>
				
				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
				</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>657.028/A85/2/2010</td>
				<td>Administración de la Producción y las Operaciones</td>
				<td>10/10/1998</td>
				<td>9789972272356</td>
				<td>12</td>
				<td>UPCI</td>
				<td>12/06/1996</td>
				
				<td>Activo</td>
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
				<h4 class="modal-title">Actualizar <?php echo $nombre; ?></h4>
			</div>
			<div class="modal-body">
			<div class="row">
			<div class="col-md-7">
			<div class="form-group">
			<label>Descripción</label>
			<input type="text" class="form-control" value="Autor Corporativo">
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
			<label>Descripción</label>
			<input type="text" class="form-control" id="">
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