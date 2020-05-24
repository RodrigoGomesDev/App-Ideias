<? 
require_once "validando_acesso.php";
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Criar Ideia</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-criar-ideia {
        padding: 80px 0 0 0;
        width: 60%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <div class="container">    
      <div class="row">

        <div class="card-criar-ideia">
          <div class="card">
            <div class="card-header">
              Registre sua ideia
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="POST" action="registra_ideia.php">
                    <div class="form-group">
                      <label>Título da ideia</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título" required="">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria da ideia</label>
                      <select class="form-control" name="categoria">
                        <option>Estudo</option>
                        <option>Alimentação</option>
                        <option>Meditação</option>
                        <option>Diversão</option>
                        <option>Leitura</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição da ideia</label>
                      <textarea name="descricao" class="form-control" rows="3" required=""></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="home.php" class="btn btn-lg btn-secondary btn-block">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-success btn-block" type="submit">
                          Registrar
                        </button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>