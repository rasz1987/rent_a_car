<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

		<!-- Main -->
			<div id="main" class="container">
				<div class="200%">
					<!--Creation of form-->
					<?php echo form_open('/createuser'); ?>
					<!--Declaration of the variables-->
					<?php 
						$username = array(
							'name'        => 'username',
							'type'        => 'text',
							'id'          => 'name',
							'class'       => 'form-control',
							'placeholder' => 'Username');

						$password = array(
							'name'        => 'password',
							'class'       => 'form-control',
							'id'          => 'exampleInputPassword1',
							'placeholder' => 'Password');

						$password_conf = array(
							'name'        => 'passconf',
							'class'       => 'form-control',
							'id'          => 'exampleInputPassword1',
							'placeholder' => 'Password Confirm');
						
						$email = array(
							'type'        => 'email',
							'name'        => 'email',
							'id'          => 'email',
							'placeholder' => 'Email');

						$buton = array(
							'type'        => 'submit',
							'class'       => 'btn btn-success',
							'name'        => 'submit',
							'value'       => 'Create');
						
						
					?>
					<!---->
						<div class="form-group">
							<?php echo form_error('username'); ?>
							<?php echo form_input($username); ?>
						</div>
						<div class="form-group">
							<?php echo form_error('email'); ?>
						    <?php echo form_input($email); ?>
						</div>
						<div class="form-group">
							<?php echo form_error('password'); ?>
						    <?php echo form_password($password); ?>
						</div>
						<div class="form-group">
							<?php echo form_error('passconf'); ?>
						    <?php echo form_password($password_conf); ?>
						</div>
						<?php echo form_button($buton, 'Create'); ?>
					<?php echo form_close()?>
				</div>
			</div>

								

							
					