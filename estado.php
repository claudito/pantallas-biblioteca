<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Estados</title>
<?php include('enlaces.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<a class="btn btn-primary btn-lg" data-toggle="modal" href='#modal-id-registrar'>Nuevo Registro </a>
<p></p>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Estados / Ayuda</h3>
	</div>
	<div class="panel-body">
    <div class="table-responsive">
    	<table id="consulta" class="table table-condensed table-bordered">
    		<thead>
    			<tr>
    				<th>ID</th>
    				<th>Descripción</th>
    				<th>Acciones</th>
    				
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td>00</td>
    				<td>EMITIDO</td>
    			
    				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
				</td>
    			</tr>
    			<tr>
    				<td>01</td>
    				<td>PENDIENTE</td>
    				
    				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
				</td>
    			</tr>
    			<tr>
    				<td>02</td>
    				<td>PRESTAMO</td>
    				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
				</td>
    			</tr>
    			<tr>
    				<td>03</td>
    				<td>ENTREGADO</td>
    				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
				</td>
    		
    			</tr>
    			<tr>
    				<td>ON</td>
    				<td>ACTIVO</td>
    				
    				<td>
				<a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id-actualizar'><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
				<a class="btn btn-danger btn-xs" data-toggle="modal" href='#modal-id-eliminar'> <i class="glyphicon glyphicon-trash"></i> Eliminar</a>
				</td>
    			</tr>
    			<tr>
    				<td>OFF</td>
    				<td>INACTIVO</td>
    				
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


<div class="modal fade" id="modal-id-registrar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Registrar</h4>
			</div>
			<div class="modal-body">
			<div class="form-group">
			<label for="">Código</label>
			<input type="text" name="" value="" class="form-control">
			</div>
			<div class="form-group">
			<label for="">Descripción</label>
			<input type="text" name="" value="" class="form-control">
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Registrar</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal-id-actualizar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar</h4>
			</div>
			<div class="modal-body">
			<div class="form-group">
			<label for="">Código</label>
			<input type="text" value="00"  class="form-control">
			</div>
			<div class="form-group">
			<label for="">Descripción</label>
			<input type="text" value="EMITIDO"  class="form-control">
			</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</div>
</div>




<div class="modal fade" id="modal-id-eliminar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Eliminar</h4>
			</div>
			<div class="modal-body">
			<h2>¿Esta seguro de eliminar el elemento seleccionado?</h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-danger">Eliminar</button>
			</div>
		</div>
	</div>
</div>