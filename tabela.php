<?php


// FILEPATH: /c:/xampp/htdocs/uniasselvi/tabela.php

// Configurações de conexão com o banco de dados

include "conexao.php";
$link = $conexao;





// Consulta SQL para extrair os dados da tabela
$sql = "SELECT nome, cargo, descricaocargo, setor, salario FROM funcionario";
$result = $link->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Cria uma tabela HTML
    echo "<table border='2'>";

    // Exibe os cabeçalhos da tabela
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Cargo</th>";
    echo "<th>Descrição</th>";
    echo "<th>Setor</th>";
    echo "<th>Salário</th>";
    echo "</tr>";

    // Exibe os dados da tabela
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["cargo"] . "</td>";
        echo "<td>" . $row["descricaocargo"] . "</td>";
        echo "<td>" . $row["setor"] . "</td>";
        echo "<td>R$" . $row["salario"] . "</td>";
        echo "</tr>";
    }

    // Fecha a tabela HTML
    echo "</table>";
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
$link->close();
?>
