<? 
//Vendo se o usuario esta logado, antes de qualquer coisa
require_once "validando_acesso.php";
?>
<?php

  //ideias array
  $ideias = [];

  //abrir o arquivo.hd
  $arquivo = fopen('arquivo.hd', 'r');

  //Registra tudo em um arquivo .hd
  //enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)) { //testa pelo fim de um arquivo
    //linhas  
    $registro = fgets($arquivo);

  //===================
    //explode dos detalhes do registro para verificar o id do usuário responsável pelo cadastro
    $registro_detalhes = explode('#', $registro);

    //(perfil id = 2) só exibi a ideia, se ela foi criada pelo usuário
    if($_SESSION['perfil_id'] == 2) {

      //se usuário autenticado não for o usuário de abertura da ideia então não faz nada
      if($_SESSION['id'] != $registro_detalhes[0]) {
        continue; //não faz nada

      } else {
        $ideias[] = $registro; //adiciona o registro do arquivo ao array $ideias
      }

    } else {
      $ideias[] = $registro; //adiciona o registro do arquivo ao array $ideias
    }

  }

  //fechar o arquivo aberto
  fclose($arquivo);
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Consultar Ideias</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 120px 0 0 0;
        width: 60%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              <h4>Suas ideias:</h4>
            </div>
            
            <div class="card-body">
              
              <!-- Usando o foreach, para simplicar a variavel e poder pegar individualmente cada string -->
              <? foreach($ideias as $ideia){ ?>

              <?
                $dados_ideia = explode('#', $ideia);

                if($_SESSION['perfil_id'] == 2){
                  //apenas exibir se foi criado pelo mesmo usuario
                  if($dados_ideia[0] != $_SESSION['id']){
                    continue;
                  }
                }

                if(count($dados_ideia) < 3){
                  continue;
                }
              ?>

              <!-- Pegando as ideias, pelo id delas no arquivo.hd -->
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $dados_ideia[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $dados_ideia[2]?></h6>
                  <p class="card-text"><?= $dados_ideia[3]?></p>

                </div>
              </div>

              <? } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-danger btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>