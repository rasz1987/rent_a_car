<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

		<!-- Main -->
			<div id="main" class="container">
				<div class="200%">
					<!--Creation of form-->
					<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

					<?php echo form_open('/login'); ?>
					<!--Declaration of the variables-->
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
					?>
					<!---->
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
						  <?php echo $this->session->flashdata('error'); ?>
					<?php echo form_close()?>
				</div>
			</div>

								

							
					