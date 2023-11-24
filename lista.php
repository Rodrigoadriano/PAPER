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
 // Comece a tabela
 echo '<table border="1">';
 // Cabeçalhos da tabela
 echo '<tr>';
 echo '<th>Nome</th>';
 echo '<th>Cargo</th>';
 // Adicione mais cabeçalhos conforme necessário
 echo '</tr>';

 // Loop através dos resultados e imprima cada linha na tabela
 while ($row = $result->fetch_assoc()) {
     echo '<tr>';
     echo '<td>' . $row["NOME"] . '</td>';
     echo '<td>' . $row["CARGO"] . '</td>';
     // Adicione mais colunas conforme necessário
     echo '</tr>';
 }

 // Feche a tabela
 echo '</table>';
} else {
 echo "0 resultados";
}


// Feche a conexão
$conn->close();
?>
