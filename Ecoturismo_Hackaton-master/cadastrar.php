<?php
  try{
      include('conexao.php');
    $nm_evento = $_POST['nome'];
    $dt_evento = $_POST['data'];
    $ds_endereco = $_POST['endereco'];
    $nr_telefone = $_POST['tel'];
    $ds_evento = $_POST['descricao'];
    

    $query = "insert into evento values(null,'$nm_evento','$dt_evento ','$ds_endereco','$nr_telefone','$ds_evento');";

    mysqli_query($conexao,$query);
    echo "Cadastro realizado com sucesso";
    header('Location: index.php');

  }
  catch(Exception $e) {
    echo "Erro ao cadastrar: ".$e;
  }
?>