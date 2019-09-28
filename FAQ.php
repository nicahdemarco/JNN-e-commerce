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

        <title>JNN-e-commerce - Preguntas Frecuentes</title>
    </head>

    <body class="">

    <?php require_once('navbar.php');?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Preguntas frecuentes</li>
            </ol>
        </nav>

    <div class="faq accordion" id="accordionExample">
        <br>   
        <h1 class="tituloFaq">Preguntas Frecuentes</h1>
        <br>   
        <br>
        <div class="card_faq">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cuáles son las formas de pago?
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="response card-body">
                    <ol class="response">
                        <li>Tarjeta de crédito Visa o MasterCard.</li>
                        <li>Transferencia a traves de PayPal.</li>
                        <li>En efectivo a través de Pago Fácil, para lo que tendrás que imprimir el cupón en nuestra página al momento de realizar tu compra.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card_faq">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Hay cargo extra por abonar con tarjeta de crédito?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="response card-body">
                    No.
                </div>
            </div>
        </div>
        <div class="card_faq">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Puedo enviar a otra persona a retirar el paquete por sus puntos de entrega?
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="response card-body">
                    Si.
                </div>
            </div>
        </div>
        <div class="card_faq">
            <div class="card-header" id="">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Hacen envíos? 
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="response card-body">
                    Sí, a todo el país a través de OCA, Mercado Envios o Correo Argentino. El costo es calculado a través de dos variables: localidad del envío y peso de la orden. Esto significa que abonarás un sólo envío, independientemente de la cantidad de artículos que compres. 
                </div>
            </div>
        </div>
        <div class="card_faq">
            <div class="card-header" id="">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Hay un monto mínimo de compra?
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="response card-body">
                No.
                </div>
            </div>
        </div>
        <div class="card_faq">
            <div class="card-header" id="">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    ¿Puedo pagar contrarrembolso?
                    </button>
                </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="response card-body">
                No, tanto el valor de tu compra como el costo del envío se abonan al hacer tu pedido en nuestra tienda.
                </div>
            </div>
        </div>
    
    </div>
    <?php require_once('footer.php'); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a27597434b.js" crossorigin="anonymous"></script>
    </body>
</html>