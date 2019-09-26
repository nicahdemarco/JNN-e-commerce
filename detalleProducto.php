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

    <body>
        <div class="container-fluid">
            <header class="main-header">


                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">remera</li>
                    </ol>
                </nav>
            </header>
        
            <!-- producto -->
            <div class="container detalle-container">
                <div class="row">
                    <section class="detalle-producto">
                    
                        <article class="col-md-8 col-sm-12 detalle-image">
                            <!-- <div class="photo-container">
                                <img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
                            </div>
                            <div class="descripcion">
                                <h4><?=$value['precio'];?></h4>
                                <p><?=$value['descripcion'];?></p>
                            </div> -->
                            <!-- <img class="phwo" src="./images/catalogo/IMG_25.jpeg.png" alt="o 01"> -->
                        </article>

                        <aside class="col-md-4 col-sm-12 detalle-descripcion">
                            <h3 class="title">Remera blanca</h3>
                            <h3 class="title">Precio:</h3>
                            <p class="texto-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus exercitationem, beatae quo quibusdam ipsa repudiandae possimus aperiam unde nam?
                            </p>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">S<label>
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">M<label>
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">L<label>
                            </div>
                            <div class="row d-flex botones">
                                <input class="btn btn-primary" type="submit" value="Comprar">
                                <input class="btn btn-primary" type="submit" value="Agregar al carrito">  
                            </div>
                        </aside>

                    </section>
                </div>
            </div>

            <?php require_once('footer.php'); ?>

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