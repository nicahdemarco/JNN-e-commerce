<?php 
require_once('baseDatos.php');
// require_once('baseMYSQL.php');
require_once('controladores/funciones.php');
require_once('helpers.php');
// require_once('autoload.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="CSS/master.css">
    <title>JNN-e-commerce</title>
</head>

<div class="container-fluid">
		
	<header class="main-header">

		<?php require_once('navbar.php'); ?>
	
	</header>
	
		<section class="carousel">

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../JNN-e-commerce/images/tshirt4.png" class="d-block w-100 lala" alt="">
						<div class="carousel-caption d-none d-md-block">
							<a href="#productos1">
								<h2>NUEVA COLECCION</h2>
								<p>Mira nuestra nueva coleccion...</p>
							</a>
						</div>	
					</div>
					<div class="carousel-item">
						<img src="../JNN-e-commerce/images/tshirt3.png" class="d-block w-100 lala" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<a href="#productos2">
								<h2>NUEVA COLECCION</h2>
								<p>Mira nuestra nueva coleccion...</p>
							</a>
						</div>
					</div>
					<div class="carousel-item">
						<img src="../JNN-e-commerce/images/tshirt1.png" class="d-block w-100 lala" alt="nueva coleccion">
						<div class="carousel-caption d-none d-md-block">
							<a href="#productos3">
								<h2>NUEVA COLECCION</h2>
								<p>Mira nuestra nueva coleccion...</p>
							</a> 
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

        </section>

		<!-- seccion que va a decir metodos de pago y demas -->
        <section class="banner">
			<div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="far fa-credit-card"></i>Tarjetas de crédito</div>
			<div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="far fa-credit-card"></i>Tarjetas de débito</div>
			<div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="fas fa-money-bill"></i>Efectivo y transferencia</div>
			<div class="col-md-3 col-sm-12 col-xs-12 metodos"><i class="fas fa-shipping-fast"></i>Envíos a todo el país</div>
		</section>

		<!-- productos -->
		<div class="container contenedor-productos">
			<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productos" id="productos1">
				
				<?php foreach ($articulos as $key => $value):?>
						<article class="col-xs-12 product-card">
							<a href="detalleProducto.php">
								<div class="photo-container">
									<img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
								</div>
								<div class="descripcion">
									<h4><?=$value['precio'];?></h4>
									<p><?=$value['descripcion'];?></p>
								</div>
							</a>
						</article>
				<?php endforeach;?>
			</section>
		
			<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productos" id="productos2">
				
				<?php foreach ($articulos2 as $key => $value):?>
						<article class="col-xs-12 product-card">
							<a href="detalleProducto.php">
								<div class="photo-container">
									<img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
								</div>
								<div class="descripcion">
									<h4><?=$value['precio'];?></h4>
									<p><?=$value['descripcion'];?></p>
								</div>
							</a>
						</article>
				<?php endforeach;?>
			</section>
			
			<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 productos" id="productos3">
				<?php foreach ($articulos3 as $key => $value):?>
						<article class="col-xs-12 product-card">
							<a href="detalleProducto.php">
								<div class="photo-container">
									<img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
								</div>
								<div class="descripcion">
									<h4><?=$value['precio'];?></h4>
									<p><?=$value['descripcion'];?></p>
								</div>
							</a>
						</article>
				<?php endforeach;?>
			</section>
		
		</div>
		
		<section class="col-md-12 w-100 mails">
			<h3 class="susc">subscribite para recibir novedades</h3>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="tu email" aria-label="Recipient's username" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-paper-plane"></i></button>
				</div>
			</div>
		</section>

		<section class="col-md-12 promos">
			<div class="col-md-6 col-sm-12 promo-content">
				<article class="promo1">
					<h2>promo1</h2>
				</article>
			</div>

			<div class="col-md-6 col-sm-12 promo-content">
				<a href="FAQ.php">
					<article class="promo2">
					<h2>FAQ's<br>Preguntas frecuentes</h2>
				</article>
				</a>
				<article class="promo3">
					<h2>promo3</h2>
				</article>
			</div>

		</section>
		
		<?php require_once("footer.php");?>
	</div>

	<script src="./main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

	</body>
</html>