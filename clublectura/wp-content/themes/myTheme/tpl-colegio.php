<?php
/*
Template Name: Registro Colegio
*/



get_header();

$nombre = $_POST['nombre'];
$nif = $_POST['nif'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$web = $_POST['web'];
$telefono = $_POST['telefono'];
$licencia = $_POST['licencia'];
$error = "";

/*SQL Consulta */

$sql = "INSERT INTO fcolegio (nombre,nif,direccion,email,web,telefono,licencia) VALUES 
('".$nombre."','".$nif."','".$direccion."','".$email."','".$web."','".$telefono."','".$licencia."');";

/**/

$wpdb->query($sql);

?>


	<div id="primary">
		<div id="content" role="main">
            <div id="center">
            <h2>Formulario del Colegio</h2>
            <form method="post" enctype="multipart/form-data"
                  action="<?php echo get_home_url(); ?>/?page_id=9">

                        <label for="exampleInputEmail1">Nombre:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="nombre">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">NIF:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="nif">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Direccion:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="direccion">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Web:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="web">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Telefono:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="telefono">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Licencia:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="licencia">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            </form>
		</div><!-- #main -->
	</div><!-- #primary -->
</div>


<?php get_footer();
