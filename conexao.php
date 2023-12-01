<?php 

/*
$servidor = "localhost:3306"; // kauan

*/
$servidor = "localhost:3360"; // Rodrigo
$usuario = "root";
$senha = "";
$banco = "uniasselvi";


$conexao = new mysqli($servidor,$usuario,$senha,$banco);
$algo = $conexao->get_server_info();
if($conexao->connect_error){
    die("Error connecting to server: ".$conexao->connect_error);

};


?>