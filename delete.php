<?php
//Conexão com Banco de dados
include "conexao.php";
$link = $conexao;

// Recebe os dados enviados pelo fetch
$jsonData = file_get_contents('php://input');
$userIds = json_decode($jsonData);
$ids = implode(",", $userIds);

// Query para deletar os funcionários cujos IDs correspondem aos valores recebidos
$sql = "DELETE FROM FUNCIONARIO WHERE CODIGO IN ($ids)";
   if(!($conexao->query($sql) === true))
   {
       die("Error delete to server: ".$conexao->connect_error);
   };
   echo "Usuarios excluídos";
   $conexao->close();
   ?>