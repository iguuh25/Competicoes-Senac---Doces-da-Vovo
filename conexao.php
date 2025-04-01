<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = 'doces0@vovo';
$nome = 'doces_da_vovo';

$conexao = new mysqli($servidor, $usuario, $senha, $nome); //$conexao recebe todos os valores para se tornar a conexao com o banco


/*Teste de conexão */
/* 
if(!$conexao->connect_error){
    echo"Conexão feita";
}
*/
?>