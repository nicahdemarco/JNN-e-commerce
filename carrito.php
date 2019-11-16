<?php
    require_once('controladores/funciones.php');
    require_once('helpers.php');
    
    
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="CSS/master.css">        

        <title>JNN-e-commerce - Carrito</title>
    </head>

    <?php require_once('navbar.php');?>

    <body >

    <br>
    <!-- Informacion de carrito -->
        <div class="carrito">
            <?php if(!empty($_SESSION['CARRITO'])) { ?>
                <div class="resumenCarrito col-auto">
                    <h3>CARRITO DE COMPRAS</h3>
                    
                    <table class="table table-striped table-light">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col" class="text-center">Cantidad</th>
                                <th scope="col" class="text-center">Precio</th>
                                <th scope="col" class="text-center">Total</th>
                                <th scope="col" ></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $subTotal = 0; ?>
                            <?php foreach ($_SESSION['CARRITO'] as $key => $producto) { ?>
                            <tr>
                                <td scope="row"><?php echo $producto['NOMBRE'] ?></td>
                                <td class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                                <td class="text-center"><?php echo $producto['PRECIO'] ?></td>
                                <td class="text-center"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'],2);  ?></td>
                                <td class="text-center">
                                    <form action="" method="post">

                                        <input type="hidden" name="id" id="id" value="<?php echo ($producto['ID']) ?>">

                                        <button class="btn btn-danger" type="submit" name="btnDelete" value="Eliminar">X</button>    
                                    </form>
                                    
                                </td>
                            </tr>
                            <?php $subTotal = $subTotal + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
                            <?php } ?>
                        </tbody>
                    </table>   

                    <table class="d-flex justify-content-end ">
                            <tr>
                                <td class="mr-4"><h5>Subtotal</h5></td>
                                <td><h5>$<?php echo number_format($subTotal,2);?></h5></td>
                                <td></td>
                            </tr> 
                            <tr>
                                <td><h5>Envio</h5></td>
                                <td><h5>$<?php echo number_format(300,2);?></h5></td>
                                <td></td>
                            </tr> 
                            <br>
                            <tr>
                                <td><h3>Total</h3></td>
                                <td><h3>$<?php echo number_format($subTotal + 300,2);?></h3></td>
                                <td></td>
                            </tr>  
                    </table>
                    <br>
                    <br>
                    <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
                        <a href="index.php">Seguir Comprando</a>
                    </button>
                   
                </div>

            <!-- Pago de Productos -->
                <div class="infoPago col-auto">
                    <h4>Información de Pago</h4>
                    <hr>
                    <form action="">
                        <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Metodo de pago..</option>
                            <option value="1">Visa</option>
                            <option value="2">MasterCard</option>
                            <option value="3">Paypal</option>
                        </select>
                        </div>
                        <hr>
                        <div class="form-group col-auto my-2 owner">
                            <label for="titular">Titular de la Tarjeta</label>
                            <input type="text" class="form-control" id="titular" >
                        </div>
                        <div class="form-group col-auto my-2">
                            <label for="tarjeta">Numero de Cuenta</label>
                            <input type="text" class="form-control" id="tarjeta">
                        </div>
                        <div class="form-group col-auto my-2 mr-4 col-md-3 d-inline-flex" >
                            <label class="mr-3 mt-1" for="cvv">CVV</label>
                            <input type="password" class="form-control" id="cvv" maxlength="4" minlength="3">
                        </div>
                        <div class="form-group col-auto my-2 col-md-9 d-inline-flex">
                            <label class="mr-3 mt-1">Ven.</label>
                            <select class="custom-select mr-1">
                                <option value="01">Enero</option>
                                <option value="02">Febrero</option>
                                <option value="03">Marzo</option>
                                <option value="04">Abril</option>
                                <option value="05">Mayo</option>
                                <option value="06">Junio</option>
                                <option value="07">Julio</option>
                                <option value="08">Agosto</option>
                                <option value="09">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                            </select>
                            <select class="custom-select">
                                <option value="16"> 2019</option>
                                <option value="17"> 2020</option>
                                <option value="18"> 2021</option>
                                <option value="19"> 2022</option>
                                <option value="20"> 2023</option>
                                <option value="21"> 2024</option>
                                <option value="20"> 2025</option>
                                <option value="21"> 2026</option>
                            </select>
                        </div>
                        <div class="form-group col-auto my-2">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Confirm</button>
                        </div>
                    </form>

                </div>
            <?php } else { ?>  
                        <div class="alert alert-success">
                            No hay productos en el carrito
                        </div>
            <?php } ?>
        </div>
    </body>
    <br>
    <br>
    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a27597434b.js" crossorigin="anonymous"></script>

</html>