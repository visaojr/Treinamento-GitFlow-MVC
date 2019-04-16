<?php
require_once 'assets/php/classes/classAlunos.php';
// Instanciando a classe Alunos
$alunos = new Alunos();

// Recebendo um POST
if(isset($_POST['add'])){
  $dados = array(
    ":matricula" => $_POST['matricula'],
    ":nome" => $_POST['nome'],
    ":telefone" => $_POST['telefone']
  );

  $result = $alunos->insertAluno($dados);
}

if(isset($_GET['matricula'])){
  $matricula = $_GET['matricula'];
  $aluno = $alunos->getAluno($matricula)->fetch(PDO::FETCH_OBJ);
}
// Chamando a funcão que devolve uma query executada
$listAlunos = $alunos->listAll()->fetchAll(PDO::FETCH_OBJ);


?>

