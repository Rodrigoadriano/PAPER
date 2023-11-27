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
////////////////////////////////////////////////////////
// Obtém os nomes das colunas
//$columns = array();
//while ($finfo = $result->fetch_field()) {
//    $columns[] = $finfo->name;
//}

// Obtém os dados das linhas
//while ($row = $result->fetch_assoc()) {
  //  $rowData = array();
  //  foreach ($columns as $col) {
 //       $rowData[$col] = $row[$col];
//    }
//    $rows[] = $rowData; // Adiciona cada linha ao array $rows
//}
//
// Converte o array $rows para JSON usando json_encode()
//$json = json_encode($rows);
///////////////////////////////////////////////////////////
if ($result->num_rows > 0) {

    $rows = array(); // Array para armazenar os resultados
    
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row; // Adiciona cada linha ao array $rows
    }

    // Converte o array $rows para JSON usando json_encode()
    $json = json_encode($rows);

    // Retorna ou imprime o JSON
    header('Content-Type: application/json');
    echo $json;
    

  
} else {
  
 echo "0 resultados";
  
}


// Feche a conexão
$conn->close();
?>
