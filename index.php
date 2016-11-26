<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mapa de Navegación del Sistema</title>
	<?php include('enlaces.php'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h1>Mapa de navegación del Sistema</h1>
<hr>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">General</h3>
	</div>
	<div class="panel-body">
		<ul>
		<li><a href="http://biblioteca.upci.online" target="_blank">Login</a></li>
		<li><a href="http://biblioteca.upci.online" target="_blank">Crear Cuenta</a></li>
		</ul>
	</div>
</div>

</div>


<div class="col-md-4">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Administrador</h3>
	</div>
	<div class="panel-body">
		<ul>
		<li><a href="activacion-de-usuarios" target="_blank">Activación de Usuarios</a></li>
		<li>Mantenimientos
		<ul>
		<li><a href="mantenimientos/Usuarios"  target="_blank">Usuarios</a></li>
		<li><a href="mantenimientos/facultades" target="_blank">Facultades</a></li>
		<li><a href="mantenimientos/especialidad" target="_blank">Especialidad</a></li>
		<li><a href="mantenimientos/autores" target="_blank">Autores</a></li>
		<li><a href="mantenimientos/turnos" target="_blank">Turnos</a></li>
		<li><a href="mantenimientos/Tipo-Usuarios" target="_blank">Tipos de Usuarios</a></li>
		
		<li><a href="mantenimientos/editorial" target="_blank">Editorial</a></li>
		<li><a href="mantenimientos/categoria" target="_blank">Categoría</a></li>
		<li><a href="mantenimientos/idioma" target="_blank">Idioma</a></li>
		<li><a href="mantenimientos/lugar-de-publicacion" target="_blank">Lugar de Publicación</a></li>
		<li><a href="mantenimientos/palabras-clave" target="_blank">Palabras Clave</a></li>
		<li><a href="mantenimientos/area-tematica" target="_blank">Área tematica</a></li>
		<li><a href="mantenimientos/cabinas" target="_blank">Cabinas</a></li>
		</ul>
		</li>
		<li><a href="mantenimientos/titulos" target="_blank">Registro de  Títulos(Libros,Tesis,etc...)</a></li>
		<li><a href="prestamo-cabinas" target="_blank">Préstamos Cabinas</a></li>
		<li><a href="prestamo-titulos" target="_blank">Préstamo de Títulos</a></li>
        <li>Reportes
        <ul>
        <li><a href="reportes-admin/titulos-mas-prestados" target="_blank">Títulos Prestados</a></li>
        <li><a href="reportes-admin/titulos-mas-solicitados" target="_blank">Títulos más Solicitados</a></li>
        </ul>
        </li>
         <li><a href="opciones" target="_blank">Configuración de Opciones de Aplicación</a></li>
		</ul>
	</div>
</div>

</div>


<div class="col-md-4">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Usuarios</h3>
	</div>
	<div class="panel-body">
	<ul>
	<li><a href="administracion-perfil" target="_blank">Administración de Perfil</a></li>
	<li><a href="solicitud-prestamo-titulos" target="_blank">Solicitud de Préstamo Títulos</a></li>
	<li><a href="solicitud-prestamo-cabina" target="_blank">Solicitud de Préstamo Cabinas</a></li>
	<li>Reportes
	<ul>
	<li><a href="reporte-usuario/titulos-mas-prestados.php" target="_blank">Títulos Prestados</a></li>
	<li><a href="reporte-usuario/titulos-mas-solicitados.php" target="_blank">Títulos Solicitados</a></li>
	</ul>
	</li>
	</ul>
	</div>
</div>

</div>



</div>
</div>
</body>
</html>