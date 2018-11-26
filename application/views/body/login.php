<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Main -->
<!----------Declaration of the variables---------->
<?php 
	$email = array(
		'name'        => 'email',
		'type'        => 'email',
		'class'       => 'form-control',
		'id'          => 'exampleInputEmail1',
		'placeholder' => 'Ingresse o seu correio',
		'required'    => 'require');
	
	$password = array(
		'name'        => 'password',
		'type'        => 'password',
		'class'       => 'form-control',
		'id'          => 'exampleInputPassword1',
		'placeholder' => 'Ingresse o seu password',
		'required'    => 'require');
	$buton = array(
		'type'        => 'submit',
		'class'       => 'btn btn-success',
		'name'        => 'submit',
		'value'       => 'Create');
	$form = array(
		'name' => 'myForm',
		'id'   => 'myForm');
?>
<!------------------------------------------------>

<!----------------FORMULARIO--------------------->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4" id="main" >
			<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
			<?php echo form_open('/login', $form); ?>
				<div class="form-group">
					<?php echo form_input($email); ?>
				</div>
				<div class="form-group">
					<?php echo form_password($password); ?>
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Lembrar me</label>
				</div>
				<?php echo form_button($buton, 'Login'); ?>
			<?php echo form_close()?>
		</div>
	</div>
	<!------------------------------------------------------->


	<!----------------ALERT--------------------->
	<div class="row justify-content-center">
		<div id="error" class="col-md-8 text-center">
		</div>
	</div>
	<!------------------------------------------>

</div>

<!--SCRIPT LOGIN-->
<script src="assets/js/script_login.js"></script>
<!---------------->

								

							
					