<?php
  include('conexao.php');

      $sql = "select * from evento";
      $query = mysqli_query($conexao,$sql);
      echo '<head>
      <title> Ecoturismo </title>
      <meta charset="utf-8" />
      <meta http-equiv="Content-Language" content="pt-br">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <script src="js/acao.js"></script>
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
            </head>
            <div class="jumbotron" >
              <div class="container" >
                  <table class="table" id="lista">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Nome</th>
                                <br>
                                <th scope="col">Data de inicio</th>
                                <br>
                                <th scope="col">Endereço</th>
                                <br>
                                <th scope="col">Numero de telefone</th>
                                <br>
                                <th scope="col">Descrição</th>
                              </tr>
                            </thead>
                            <tbody>
                              ';




            while($dados = $query->fetch_object()){

                        echo'<tr>
                          <td>'.$dados->nm_evento.'</td>
                          <td>'.$dados->dt_evento.'</td>
                          <td>'.$dados->ds_endereco.'</td>
                          <td>'.$dados->nr_telefone.'</td>
                          <td>'.$dados->ds_evento.'</td> 
                          <br/>
                                     
                        </tr>';
            }
                        echo'</tbody>
                      </table>
                   </div>
                  </div>';
?>

