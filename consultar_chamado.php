<?php
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado']!= 'SIM'){
header('location:index.php?login=erro2');

}
?>
<?php
/*
// chamados
$chamados=array();

//abrir chamado.hd
$arquivo = fopen('arquivo.hd','r');

//enquanto houver registros(linhas) a serem recuperados
while(!feof($arquivo)){ //TESTA PELO FIM DE UM ARQUIVO.
  //linhas
  $registro=fgets($arquivo);// recuperar o que estiver ali
  //echo $registro . '<br/>';
  $chamados[]= $registro ;
  }
  //fechar o arquivo
  fclose( $arquivo );

  //aqui eu testei pra ver se tava sendo  armazenado no array.
  /*
  echo '<pre>';
  print_r($chamados);
  echo '</pre>';
*/

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>

            <div class="card-body">
              <?php
              foreach($chamados as $chamado){

              ?>
               <?php
              $chamado_dados=explode('#', $chamado);
              if (count($chamado_dados)< 3){
                continue;
              }

                //echo '<pre>';
                //print_r($chamado_dados);
                //echo'</pre>';
              ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamado_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[1]?></h6>
                  <p class="card-text"><?=$chamado_dados[2]?></p>

                </div>
              </div>
              <?php   }?>



              <div class="row mt-5">
                <div class="col-6">
                <a href="home.php"> class="btn btn-lg btn-warning btn-block" type="submit">Voltar </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
