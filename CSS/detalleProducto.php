<?php 

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

        <header class="main-header">

        </header>
	
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Remeras</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>

		<!-- producto -->
		<div class="container contenedor-producto">
			<!-- <span class="titulo-lista">
				Lista de productos
			</span> -->
            <section class="col-md-12 col-sm-12 producto-imagenes">
                
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
            <aside class="detalle">

            </aside>
            <article class="descripcion">

            </article>

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