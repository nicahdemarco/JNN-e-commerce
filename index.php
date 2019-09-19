<?php 
	include_once('baseDatos.php');

	
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
						<img src="img-proyecto/tshirt.png" wihgt="40" height="40" alt="">
						Brand tshirt
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
			<img src="images/img-banner.jpg" alt="banner">
        </section>

		<!-- seccion que va a decir metodos de pago y demas -->
        <section class="banner">
			<div></div>
		</section>

		<!-- productos -->
		<section class="lista 1 de productos">
			<?php foreach ($articulos as $key => $value):?>
					<article class="product">
						<div class="photo-container">
							<img class="photo" src="images/<?= $value['imagen'];?>" alt="pdto 01">
							<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
							<a class="zoom" href="#">Ampliar foto</a>
						</div>
						<h2><?=$value['titulo'];?></h2>
						<p><?=$value['descripcion'];?></p>
						<a class="more" href="#">ver más</a>
					</article>
			<?php endforeach;?>
        </section>

        <section class="lista 2 de productos">
			<?php foreach ($articulos as $key => $value):?>
					<article class="product">
						<div class="photo-container">
							<img class="photo" src="images/<?= $value['imagen'];?>" alt="pdto 01">
							<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
							<a class="zoom" href="#">Ampliar foto</a>
						</div>
						<h2><?=$value['titulo'];?></h2>
						<p><?=$value['descripcion'];?></p>
						<a class="more" href="#">ver más</a>
					</article>
			<?php endforeach;?>
        </section>

        <section class="lista 3 de productos">
			<?php foreach ($articulos as $key => $value):?>
					<article class="product">
						<div class="photo-container">
							<img class="photo" src="images/<?= $value['imagen'];?>" alt="pdto 01">
							<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
							<a class="zoom" href="#">Ampliar foto</a>
						</div>
						<h2><?=$value['titulo'];?></h2>
						<p><?=$value['descripcion'];?></p>
						<a class="more" href="#">ver más</a>
					</article>
			<?php endforeach;?>
        </section>
        

		<!-- footer -  Aca ponemos las secciones raras como las preguntas y contactos, etc.-->		
		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
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
</body>

</html>