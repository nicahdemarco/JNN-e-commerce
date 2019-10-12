<?
require_once('controladores/funciones.php');
require_once('helpers.php');

?>

    <nav class="navbar navbar-expand-lg w-100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarToggler">
            <a class="navbar-brand" href="#">
                <img src="images/tshirt.png" width="40" height="40" alt="logo" >
            </a>
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar" aria-label="buscar" aria-describedby="basic-addon2">
            </div>
            
                                
                        <button type="button" class="btn btn-info btn_nav" data-toggle="modal" data-target="#registro">
                        Crear cuenta
                        <?php require_once('registro.php'); ?>
                        </button>
                        
                        
                        <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="completardatos" id="completardatos">Completa tus Datos</h5>
                                    <?php if(isset($errores)):?>
                                        <ul class="alert alert-danger">
                                            <?php foreach ($errores as $value) :?>
                                                <li><?=$value;?></li>
                                            <?php endforeach;?>
                                        </ul>
                                    <?php endif;?> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                <input type="nombre" class="form-control" id="nombre" placeholder="Nombre">
                                </div>

                                <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                <input type="telefono" class="form-control" id="telefono" placeholder="Telefono">
                                </div>

                                <div class="form-group">
                                <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">
                                </div>

                                <div class="form-group">
                                <input required name="passwordRepeat" type="password" value= ""class="form-control" id="passwordRepeat" placeholder="Repetir contraseña">
                                </div>
                            </div>
                            <div class="modal-footer">

                                <button class="btn btn-facebook"><i class="fa fa-facebook"></i>Conectate con Facebook</button>

                                <button type="button" class="btn btn-danger">Save changes</button>

                                <button type="button" class="btn btn-success">Crear Cuenta</button>
                            </div>
                            </div>
                            
                        </div>
                        </div>

                        <button type="button" class="btn btn-info  btn_nav" data-toggle="modal" data-target="#cuenta">
                        Ingresar
                        <?php require_once('login.php'); ?>
                        </button>

                        
                        <div class="modal fade" id="cuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="titulo" id="titulo">Acceder</h5>
                                <?php if(isset($errores)):?>
                                <ul class="alert alert-danger">
                                    <?php foreach ($errores as $value) :?>
                                    <li><?=$value;?></li>
                                    <?php endforeach;?>
                                </ul>
                                <?php endif;?> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                    <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                    <input required name="password" type="password" value= "" class="form-control" id="password" placeholder="Contraseña">
                                    <small class="form-text text-muted">Al menos 6 caracteres, debe contenter sólo números</small>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                
                            <button type="button" class="btn btn-success">Ingresar</button>

                            <div class="form-group">
                                <input  class="text-left" name="recordarme" type="checkbox" value= "recordarme" class="form-control " id="recordarme" >
                                <label for="recordarme">Recordarme</label>
                            </div> 
                                
                            </div>
                            </div>
                        </div>
                        </div>
            
            <a class="carrito-de-compras" href="#">
                <img src="images/tcart.png" width="40" height="40" data-toggle="tooltip" data-placement="top" title="Carrito de compras" alt="carrito de compras"> 
            </a>
        </div> 
    </nav>