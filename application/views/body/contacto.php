<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

		<!-- Main -->
			<div id="main" class="container">
				<div class="200%">
					<!--Creation of form-->
					<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
					<?php echo form_open('/recibiremail'); ?>
					<!--Declaration of the variables-->
					<?php 
						$name = array(
							'name'        => 'name',
							'type'        => 'text',
							'id'          => 'name',
							'placeholder' => 'Nome',
							'required'    => 'require');
						$email = array(
							'type'        => 'email',
							'name'        => 'email',
							'id'          => 'email',
							'required'    => 'require',
							'placeholder' => 'Correio');
						$category = array(
							'name'        => 'category',
							'id'          => 'category');
						$options = array(
							''            => '',        
					        '0'           => 'Manufacturing',
					        '1'           => 'Shipping',
					        '2'           => 'Administration',
					        '3'           => 'Human Resources');
						$rb1 = array(
							'name'        => 'priority',
							'id'          => 'priority-low',
							'value'       => 0,
							'checked'     => TRUE);
						$rb2 = array(
							'name'        => 'priority',
							'id'          => 'priority-normal',
							'value'       => 1);
						$rb3 = array(
							'name'        => 'priority',
							'id'          => 'priority-high',
							'value'       => 2);
						$check = array(
							'id'          => 'copy',
							'name'        => 'copy',
							'value'       => 1);
						$txt_area = array(
							'name'        => 'message',
							'id'          => 'message',
							'required'    => 'require',
							'placeholder' => 'Ingrese o seu mensagen',
							'rows'        => 6);
						$reset = array(
							'value'        => 'Reset',
							'class'        => 'alt');
					?>
					<!---->
						<div class="row uniform">
							<div class="6u 12u$(xsmall)">
								<?php echo form_input($name);?>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<?php echo form_input($email); ?>
							</div>
							<!-- Break -->
							<div class="12u$">
								<div class="select-wrapper">
									<?php echo form_dropdown($category, $options);?>
								</div>
							</div>
							<!-- Break -->
							<div class="4u 12u$(small)">
								<?php echo form_radio($rb1)?>
								<?php echo form_label('Prioridade Baixa', 'priority-low'); ?>
							</div>
							<div class="4u 12u$(small)">
								<?php echo form_radio($rb2); ?>
								<?php echo form_label('Prioridade Normal', 'priority-normal'); ?>
							</div>
							<div class="4u$ 12u$(small)">
								<?php echo form_radio($rb3); ?>
								<?php echo form_label('Prioridade Alta', 'priority-high'); ?>
							</div>
							<!-- Break -->
							<div class="6u 12u$(small)">
								<?php echo form_checkbox($check); ?>
								<?php echo form_label('Envia uma copia do mensagen para o meu correio', 'copy'); ?>
							</div>
							<!-- Break -->
							<div class="12u$">
								<?php echo form_textarea($txt_area); ?>
							</div>
							<!-- Break -->
							<div class="12u$">
								<ul class="actions">
									<li><?php echo form_submit('', 'Enviar mensagen'); ?>
										</li>
									<li><?php echo form_reset($reset); ?></li>
								</ul>
							</div>
						</div>
					<?php echo form_close()?>
				</div>
			</div>

								

							
					