<?php
/*
Template Name: Registro Alummno
*/





$nombre = $_POST['nombre'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
$comentario = $_POST['comentario'];

/*SQL Consulta */

$sql = "INSERT INTO alumno (nombre,fecha_de_nacimiento,comentario) VALUES 
('".$nombre."','".$fecha_de_nacimiento."','".$comentario."');";

/**/

$wpdb->query($sql);

?>

<?php get_header( ); ?>

	<div class="container-fluid d-flex flex-column col-12 col-md-9 my-5 justify-content-center align-items-center" id="primary">
		<div class="text-black" id="content" role="main">
            <div id="center">
            <h4 class="display-3">Formulario de Alumno</h4>
            <form method="post" class="" enctype="multipart/form-data"
                  action="<?php echo get_home_url(); ?>/?page_id=5">
            <div class="form-group mr-sm-3">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre">
                </div>
                <div class="form-group mr-sm-3">
                <label>Fecha de Nacimiento:</label>
                <input type="text" class="form-control" name="fecha_de_nacimiento">
                </div>
                <div class="form-group mr-sm-3">
                <label>Comentarios:</label>
                <textarea type="text" class="form-control"  name="comentario"></textarea>
                </div>
                <div class="form-group mr-sm-3">
                <input type="submit" value="Enviar">
                </div>

            </form>
		</div><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer();
