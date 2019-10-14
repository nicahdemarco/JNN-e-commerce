<?php require_once('baseDatos.php');

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

    <body>
        <div class="container-fluid">
            <header class="main-header">
                <?php require_once('navbar.php');?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">remeras</li>
                    </ol>
                </nav>
            </header>
            <!-- producto -->
            <div class="container detalle-container ">
                <div class="row">
                    <section class="detalle-producto d-xs-flex">
                    
                        <article class="col-md-6 col-sm-12 col-xs-12 detalle-imagen">
                            <!-- <div class="photo-container">
                                <img class="photo" src="images/catalogo/<?= $value['imagen'];?>" alt="pdto 01">
                            </div>
                            <div class="descripcion">
                                <h4><?=$value['precio'];?></h4>
                                <p><?=$value['descripcion'];?></p>
                            </div> -->
                            <!-- <img class="phwo" src="./images/catalogo/IMG_25.jpeg.png" alt="o 01"> -->
                            <div class="row d-flex botones">
                                <input class="btn btn-primary" type="submit" value="Continuar comprando">
                            </div>
                        </article>

                        <aside class="col-md-6 col-sm-12 col-xs-12 detalle-descripcion">
                            <h3 class="title">Remera blanca</h3>
                            <h2 class="price">$1400</h2>
                            <h3 class="frase">Frase: ipsum dolor sit amet co blanca</h3>
                            <p class="texto-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus exercitationem, beatae quo quibusdam ipsa repudiandae possimus aperiam unde nam?
                            </p>
                            <div class="select">TALLE</div>
                            <div class="d-flex mb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">S</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">M</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">L</label>
                                </div>
                                </div>
                            <div class="select">COLOR</div>
                            <div class="d-flex mb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="BLANCO">
                                    <label class="form-check-label" for="inlineCheckbox1">BLANCO</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NEGRO">
                                    <label class="form-check-label" for="inlineCheckbox2">NEGRO</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="GRIS">
                                    <label class="form-check-label" for="inlineCheckbox3">GRIS</label>
                                </div>
                            </div>
                            <div class="qty my-4">
                                <span class="minus signos">-</span>
                                <input type="number" class="count signo" name="qty" value="1">
                                <span class="plus signos">+</span>
                            </div>
                            
                            <div class="row d-flex botones">
                                <input class="btn btn-primary" type="submit" value="Agregar al carrito">
                                <input class="btn btn-primary" type="submit" value="Comprar">  
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