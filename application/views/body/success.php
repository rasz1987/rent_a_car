<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<?php 
									$url    = $_SERVER["HTTP_REFERER"];
									$createuser = base_url().'createuser';
									$createmessage = base_url().'contacto';
									if ($url == $createuser) {?>
										<p>O seu usuario ha sido creado</p>
								        <h2>Muito obrigado!!</h2>
							        <?php	
									}
									if ($url == $createmessage) {?>
										<p>Muito obrigado!! por elegir os nossos serviços</p>
										<h2>O seu mensagen ha sido enviado!!</h2>
							        <?php
							    	}
							    	else { ?>
									<p>Muito obrigado!! por elegir os nossos serviços</p>
									<h2>O seu mensagen ha sido enviado!!</h2>
									<?php 
									}
									?>
							</header>
						</div>
					</div>
				</div>
			</section>