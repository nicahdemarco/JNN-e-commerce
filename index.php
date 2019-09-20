<?php require_once('baseDatos.php');
?>
<!-- esto esta linkeado para mas adelante -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="CSS/master.css">
    <title>JNN-e-commerce</title>
</head>

<div class="container-fluid">

        <!-- En este archivo esta toda la estructura html, a medida que cada seccion se termine,
        hay que reemplazarla con la seccion php insertada -->

	<!-- cabecera - Aca vamos a tener una navbar que tiene un logo, una barra de busqueda, 
		un boton de crear cuenta y un boton de ingresar, un icono de carrito -->
		
		<header class="main-header">

		<nav class="navbar navbar-expand-lg w-100 ">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="#">
						<img src="img-proyecto/tshirt.png" wihgt="40" height="40" alt="" >
						
					</a>

					<form class="form-inline my-2 my-lg-0 ">
					<input class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
					</form>

					<ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
						<li class="nav-item ">
							<a class="nav-link" href="#">Crear cuenta<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Ingresar</a>
						</li>
					</ul>
					
					<a class="Carrito de Compras" href="#">
					<img src="img-proyecto/añadir-al-carrito.png" wight="40" height="40" alt="">
					</a>
				</div> 
		</nav>
		</header>
	
		<!-- carrousel de productos de tres slides, Bootstrap tiene bastante facil-->
		<section class="carousel">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" style="background-image:url(img-proyecto/tshirt3.jpg);">
					<img src="../JNN-e-commerce/img-proyecto/tshirt3.jpg" class="d-block w-100 lala" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h3>Third slide label</h3>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>	
				</div>
				<div class="carousel-item" style="background-image:url(img-proyecto/tshirt4.png);">
					<img src="../JNN-e-commerce/img-proyecto/tshirt4.png" class="d-block w-100 lala" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h3>Third slide label</h3>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../JNN-e-commerce/img-proyecto/tshirt1.png" class="d-block w-100 lala" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h3>Third slide label</h3>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
			<span class="titulo-lista">
				Lista de productos
			</span>
		<section class="col-md-12 col-sm-12 productos">
			
			<?php foreach ($articulos as $key => $value):?>
					<article class="product-card">
						<div class="photo-container">
							<img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
						</div>
						<div class="descripcion">
							<h4><?=$value['precio'];?></h4>
							<p><?=$value['descripcion'];?></p>
						</div>
					</article>
			<?php endforeach;?>
		</section>
		
		<p class="titulo-lista">Lista de productos</p>
        <section class="col-md-12 col-sm-12 productos">
			
			<?php foreach ($articulos as $key => $value):?>
					<article class="product-card">
						<div class="photo-container">
							<img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
						</div>
						<div class="descripcion">
							<h4><?=$value['precio'];?></h4>
							<p><?=$value['descripcion'];?></p>
						</div>
					</article>
			<?php endforeach;?>
		</section>
		
		<p class="titulo-lista">Lista de productos</p>

        <section class="col-md-12 col-sm-12 productos">
			<?php foreach ($articulos as $key => $value):?>
					<article class="product-card">
						<div class="photo-container">
							<img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
						</div>
						<div class="descripcion">
							<h4><?=$value['precio'];?></h4>
							<p><?=$value['descripcion'];?></p>
						</div>
						
					</article>
			<?php endforeach;?>
		</section>
		
		
        
		</div>
		<section class="col-md-12 w-100 mails">
			<h3 class="susc">subscribite para recibir novedades</h3>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="tu email" aria-label="Recipient's username" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
				</div>
			</div>
		</section>

		<!-- footer -  Aca ponemos las secciones raras como las preguntas y contactos, etc.-->		
		
		<footer class="main-footer row">
		<hr class="mt-0 d-inline-block mx-auto " style="width:95%;">
			<div>
				<ul class="redeslist">
					<li><H5>REDES SOCIALES</H5></li>

					<li><hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;"></li>

					<span><a href=""><i class="fab fa-facebook-f white-text mr-1 fa-2x"> </i></a></span>
					<!-- Twitter -->
					<span><a href=""><i class="fab fa-twitter white-text mr-1 fa-2x"> </i></a></span>
					<!-- Google +-->
					<span><a href=""><i class="fab fa-google-plus-g white-text mr-1 fa-2x"> </i></a></span>
					<!--Linkedin -->
					<span><a href=""><i class="fab fa-linkedin-in white-text mr-1 fa-2x"> </i></a></span>
					<!--Instagram-->
					<span><a href=""><i class="fab fa-instagram white-text mr-1 fa-2x"> </i></a></span>
					<!--Pinterest-->
					<span><a href=""><i class="fab fa-pinterest white-text mr-1 fa-2x"> </i></a></span>
				</ul>
			</div>

			<div>
				<ul class="metodlist">
					<li><h5>METODOS DE PAGO</h5></li>

					<li><hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;"></li>

					<span><a href="#" target="_blank"><img src="img-proyecto/Visa_Logo.png" class="mr-1" width="40px"></i></a></span>
					<span><a href="#" target="_blank"><img src="img-proyecto/mastercard.png" class="mr-1" width="40px"></a></span>
					<span><a href="#" target="_blank"><img src="img-proyecto/pagofacil.png" class="mr-1" width="40px"></a></span>
					<span><a href="#" target="_blank"><img src="img-proyecto/paypal.png" class="mr-1" width="60px"></a></span>
				</ul>
			</div>

			<div>
				<ul class="envioslist">
					<li><h5>ENVIOS</h5></li>

					<li><hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;"></li>

					<span><a href="#" target="_blank"><img src="img-proyecto/oca.png" class="mr-1" width="35px"></a></span>
					<span><a href="#" target="_blank"><img src="img-proyecto/logo-mercadoenvios.png" class="mr-1" width="50px"></a></span>
					<span><a href="#" target="_blank"><img src="img-proyecto/correoarg.png" class="mr-1" width="65px"></a></span>
				</ul>
			</div>

			<div>
				<ul class="contactlist">
					<li><h5>CONTACTO</h5></li>

					<hr class="accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">

					<li><a href="mailto:consultas@jnncommerce.com.ar" target="_blank"><i class="fas fa-envelope">  </i>  consultas@jnncommerce.com.ar</a></li>
					<li><a href="https://www.google.com.ar/maps/place/Av.+Monroe+860,+Buenos+Aires/@-34.5488518,-58.4458325,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcb436f18dc22f:0x36090a5d367889c6!8m2!3d-34.5488518!4d-58.4436438" target="_blank"><i class="fas fa-map-marker-alt">  </i>  Retira tu pedido por Belgrano (Capital Federal)</a></li>
					<li><a href="tel:+54666666"><i class="fas fa-phone-square-alt">  +54 666 666</i></a></li>
				</ul>
			</div>
			
			<hr class="mt-0 d-inline-block mx-auto " style="width:95%;">

		
			<div class="pie">
				<ul>
					<span class="mr-3">© 2018 Copyright</span>
					<span class="mr-1"><a href="#">   Términos y Condiciones</a> |</span>
					<span class="mr-1"><a href="#">Politicas de Privacidad</a> |</span>
					<span class="mr-1"><a href="#">Ayuda</a></span>
				</ul>
			</div>
		</footer>	
		
		</div>

	</body>
</html>


















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/a27597434b.js" crossorigin="anonymous"></script>
</body>

</html>