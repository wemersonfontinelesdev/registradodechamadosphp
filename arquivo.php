<?php
session_start();
print_r($_SESSION);
$_SESSION[' x']='Oi, sou uma valor de sessão';
echo'<hr/>';
$usuario = false;
$usuario_app = array(
  array('email'=>'wemerson@gmail.com', 'senha'=>'12345'),
  array('email'=>'tawane@gmail.com', 'senha'=>'123456'),
);

foreach( $usuario_app as $user){
  if( $user['email'] == $_POST['email'] && $user['senha']== $_POST['senha'] ){
  $usuario= true;
}
}
if( $usuario ){
  //echo 'Usuario autenticado';
  $_SESSION['autenticado']='SIM';
  header('location: home.php');
} else {
  $_SESSION['autenticado']= 'NÃO';
  header('location:index.php?login=erro');
}


?>;
