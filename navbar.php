<?
require_once('controladores/funciones.php');
require_once('helpers.php');

?>

<nav class="navbar navbar-expand-lg w-100">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <a class="navbar-brand" href="index.php">
            <img src="images/tshirt.png" width="40" height="40" alt="logo">
        </a>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Buscar" aria-label="buscar" aria-describedby="basic-addon2">
        </div>

        <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
            <a href="registro.php">Crear cuenta</a>
        </button>

        <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#cuenta">
            <a href="login.php">Ingresar</a>
        </button>

    
        
        <a class="carrito-de-compras" href="carrito.php">
            <img src="images/tcart.png" width="40" height="40" data-toggle="tooltip" data-placement="top" title="Carrito de compras" alt="carrito de compras">
            (<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);?>) 
        </a>
    </div>
</nav>