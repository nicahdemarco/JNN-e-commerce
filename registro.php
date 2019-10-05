<?

require_once('controladores/funciones.php');
require_once('helpers.php');

if($_POST){
     $errores = validar($_POST,$_FILES);
       if(count($errores)==0){
       $usuario = buscarPorEmail($_POST["email"]);
       if($usuario !== null){
            $errores["email"]="Usuario ya registrado";
         }else{
            $avatar = armarAvatar($_FILES);
            $registro = armarRegistro($_POST,$avatar);
            guardarRegistro($registro);
            

                header("location:login.php");
                exit;
    }     

  }
}


 ?>
