<?php

if(!isset($_SESSION["validarIngreso"])){

	echo '<script>window.location = "index.php?ruta=ingreso";</script>';

	return;

}else{

	if($_SESSION["validarIngreso"] != "ok"){

		echo '<script>window.location = "index.php?ruta=ingreso";</script>';

		return;
	}
	
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>

<h1 class="tituloPagina">Inicio</h1>

<table class="tabla">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($usuarios as $key => $value): ?>

		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["nombre"]; ?></td>
			<td><?php echo $value["email"]; ?></td>
			<td><?php echo $value["fecha"]; ?></td>
			<td>

			<div class="botonesEditar">		
				<a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton_editar"><i
                                    class="fa-solid fa-pencil" aria-hidden="true"></i></a>

				<form method="post">

					<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
					
					<button type="submit" class="boton_borrar"><i
                                    class="fa-solid fa-trash" aria-hidden="true"></i></button>

					<?php

						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistro();

					?> 

				</form>			

			</div>
				

			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>