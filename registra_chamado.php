<?php
if (isset($_POST['titulo'], $_POST['categoria'], $_POST['descricao'])) {
//Estamos trabalhando na montagem do texto;
$titulo =str_replace('#','-',$_POST['titulo']);
$categoria= str_replace('#','-',$_POST['categoria']);
$descricao= str_replace('#','-',$_POST['descricao']);
//implode('#', $_POST);
$texto= $titulo. '#' . $categoria. '#'.$descricao. PHP_EOL;
// abrindo o arquivo
$arquivo=fopen('aquivo.hd','a');
//escrevendo o texto
fwrite($arquivo,$texto);
//fechando o arquivo
fclose($arquivo);
//echo $texto;
header('location: home.php');
}
?>;
