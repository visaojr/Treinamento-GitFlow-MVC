<?php
require_once 'assets/php/controller/controllerAlunos.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Alunos Matriculados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
    if(isset($result)){
        if($result){
            echo "<script>alert('Aluno adicionado com sucesso')</script>";
        }else{
            echo "<script>alert('Aluno não pode ser adicionado')</script>";
        }
    }
    
    ?>

  <div class="container">
      <div class="row">
          <table class="table table-striped">
              <thead class="thead-inverse">
                  <tr>
                      <th>Matricula</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php foreach($listAlunos as $aluno){ ?>
                      <tr>
                          <td><?=$aluno->matricula?></td>
                          <td><?=$aluno->nome?></td>
                          <td><?=$aluno->telefone?></td>
                      </tr>
                      <?php } ?>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>
                              <button class="btn btn-warning" data-toggle="modal" data-target="#modalAdd">Adicionar Aluno</button>
                          </td>
                      </tr>
                  </tbody>
          </table>
      </div>
  </div>

  <!-- Modal Add Aluno -->
  
  <!-- Modal -->
  <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Adicionar Aluno</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <form action="index.php" method="post">
                    <div class="modal-body">   
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Insira o nome do aluno" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Max 45 caractéres</small>
                        </div>
                        <div class="form-group">
                            <label for="">Matricula</label>
                            <input type="text" name="matricula" class="form-control" placeholder="Insira a matricula do aluno" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Max 7 caractéres</small>
                        </div>
                        <div class="form-group">
                            <label for="">Telefone</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Insira o telefone do aluno" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Max 11 caractéres</small>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        <button type="subit" class="btn btn-primary" name="add">Salvar</button>
                    </div>
              </form>
          </div>
      </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>