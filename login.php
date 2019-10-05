<?
require_once('controladores/funciones.php');
require_once('helpers.php');

if($_POST){
    $errores = validarLogin($_POST);
    if(count($errores)==0){
      $usuario = buscarPorEmail($_POST['email']);
      if($usuario==null){
        $errores['email']="Usuario no encontrado...";
      }else{
       
        if(password_verify($_POST['password'],$usuario['password'])===false){
          $errores['password']="Datos inválidos...";
        }else{
          seteoUsuario($usuario,$_POST);
          if(validarUsuario()){
            header('location:perfil.php');
            exit;
          }else{
            header('location:login.php');
            exit;
          }
        }
      }
    }
  }
  
?>