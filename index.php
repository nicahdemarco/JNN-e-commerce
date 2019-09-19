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
	<link rel="stylesheet" href="CSS/master.css">
    <title>JNN-e-commerce</title>
</head>

<div class="container-fluid">
        
        <!-- cabecera - Aca vamos a tener una navbar que tiene un logo, una barra de busqueda, 
        un boton de crear cuenta y un boton de ingresar, un icono de carrito -->
		<header class="main-header">
			
		</header>

		<section class="carousel">

		<div id="carouselProductosIndicadores" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicadores">
				<li data-target="#carouselProductosIndicadores" data-slide-to="0" class="active"></li>
				<li data-target="#carouselProductosIndicadores" data-slide-to="1"></li>
				<li data-target="#carouselProductosIndicadores" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="..." class="d-block w-100" alt="...">Probando!
				</div>
				<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">Probando mas
				</div>
				<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">Probando mas y mas
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselProductosIndicadores" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselProductosIndicadores" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

        </section>

		<!-- seccion que va a decir metodos de pago y demas -->
        <section class="banner">
			<div class="metodos"><i class="far fa-credit-card"></i>Tarjetas de crédito</div>
			<div class="metodos"><i class="far fa-credit-card"></i>Tarjetas de débito</div>
			<div class="metodos"><i class="fas fa-money-bill"></i>Efectivo y transferencia</div>
			<div class="metodos"><i class="fas fa-shipping-fast"></i>Envíos a todo el país</div>
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

		<!-- footer -  Aca ponemos las secciones raras como las preguntas y contactos, etc.-->		
		
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