<?php
	$servidor = 'localhost';
	$user = 'gustavo';
	$senha = '12345';
	$nomebanco = 'bd_hack';
	$conexao = mysqli_connect($servidor, $user, $senha, $nomebanco);
							//servidor , usuario banco, senha, nome do banco
		if(!$conexao)
		{
			echo "erro ao conectar ao banco de dados!";exit();
		}
?>