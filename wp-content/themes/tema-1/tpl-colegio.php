<?php
/*
Template Name: Registro Colegio
*/





$nombre = $_POST['nombre'];
$nif = $_POST['nif'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$web = $_POST['web'];
$telefono = $_POST['telefono'];
$licencia = $_POST['licencia'];
$error = "";

/*SQL Consulta */

$sql = "INSERT INTO colegio (nombre,nif,direccion,email,web,telefono,licencia) VALUES 
('".$nombre."','".$nif."','".$direccion."','".$email."','".$web."','".$telefono."','".$licencia."');";

/**/

$wpdb->query($sql);
?>
<?php get_header( ); ?>

<div class="container-fluid d-flex flex-column col-12 col-md-9 my-5 justify-content-center align-items-center" id="primary">
    <div class="row">
      <div id="center">
            <h4 class="display-3">Formulario del Colegio</h4>
            <form method="post" enctype="multipart/form-data"
                  action="<?php echo get_home_url(); ?>/?page_id=9" class="">

<div class="form-group mr-sm-3">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control">
                </div>

<div class="form-group mr-sm-3">
                <label>NIF:</label>
                <input type="text" name="nif" class="form-control">
                </div>

<div class="form-group mr-sm-3">
                <label>Direccion:</label>
                <input type="text" name="direccion" class="form-control">
                </div>

<div class="form-group mr-sm-3">
                <label>Email:</label>
                <input type="text" name="email" class="form-control">
                </div>

<div class="form-group mr-sm-3">
                <label>Web:</label>
                <input type="text" name="web" class="form-control">
                </div>

<div class="form-group mr-sm-3">
                <label>Telefono:</label>
                <input type="text" name="telefono" class="form-control">
                </div>

                <div class="form-group mr-sm-3">
                <label>Licencia:</label>
                <input type="text" name="licencia" class="form-control">
                </div>

<div class="form-group mr-sm-3">
                <input type="submit" value="Enviar">
</div>


            </form>
		</div>
	</div>
</div>



<?php get_footer();
