<?php
/* Conexão com BD MySQL (usuário 'root', senha 'root' e banco 'uniasselvi') */
include "conexao.php";
$link = $conexao;
   // variáveis criadas para obter valores dos parâmetros do formulário


// Recebe os dados enviados pelo fetch
$dados =  $_POST['dados'];

// Decodifica os dados JSON para um array PHP
$checkboxesSelecionados = json_decode($dados);
var_dump( $checkboxesSelecionados);
// Converte o array de IDs em uma string separada por vírgula para usar na consulta SQL
$ids = implode(",", $checkboxesSelecionados);

// Query para deletar os funcionários cujos IDs correspondem aos valores recebidos
$sql = "DELETE FROM FUNCIONARIO WHERE id IN ($ids)";

   if(!($conexao->query($sql) === true))
   {
       die("Error delete to server: ".$conexao->connect_error);
       echo "Error delete.php";
   };
   echo "Usuario excluído";
   $conexao->close();

   
   
   ?>