<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>RCM | <?php echo uri_string();?></title>
		<link rel="shortcut icon" href="<?php base_url();?>assets/images/favicon.ico" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?php base_url();?>assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<?php $session = $this->session->userdata('email')?>
		
			<header id="header" class="alt">
				<div class="logo"><a href="<?php base_url();?>home">Rent a Car <span>Madeira</span></a></div>
				<a href="#menu"><?php if ($session != '') {
									echo $this->session->userdata('email');
								}
								else
								{
								  echo 'Menu';
								}?></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<?php if ($session != '') {?>
					<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
					<?php } else {?>
					<li><a href="<?php echo base_url(); ?>login">Login</a></li>
					<?php } ?>
					<li><a href="home">Home</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a href="contacto">Contacto</a></li>
					<li><a href="automoveis">Frota automóvel</a>
						<?php if ($session != '') {?>
						<ul class="links1">
							<li><a href="createuser">Adicionar usuario</a></li>
							<li><a href="#">Editar usuario</a></li>
							<li><a href="#">Eliminar usuarios</a></li>
							<li><a href="#">Adicionar automoveis</a></li>
							<li><a href="#">Editar automoveis</a></li>
							<li><a href="#">Eliminar automoveis</a></li>
						</ul>
						<?php } ?>
					</li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="<?php base_url();?>assets/images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Faça o seu melhor pedido <a href="<?php base_url();?>contacto">ALUGAR</a></p>
							<h2>Toyota GT86</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php base_url();?>assets/images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Faça o seu pedido hoje <a href="<?php base_url();?>contacto">ALUGAR</a></p>
							<h2>Honda</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php base_url();?>assets/images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Seguro contra todos os riscos <a href="<?php base_url();?>contacto">ALUGAR</a></p>
							<h2>Mercedes</h2>
						</header>
					</div>
				</article>
			</section>