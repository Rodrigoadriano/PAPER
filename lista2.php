<?php
// Conectar ao banco de dados (substitua essas informações com suas credenciais)
include "conexao.php";
$conn = $conexao;
// Verificar a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Query para selecionar todos os funcionários
$sql = "SELECT * FROM funcionario";
$result = $conn->query($sql);

// Se houver resultados
if ($result->num_rows > 0) {


  
} else {
  
 echo "0 resultados";
  
}


// Feche a conexão
$conn->close();
?>
