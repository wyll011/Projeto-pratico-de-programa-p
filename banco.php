<?php
$hostname = "localhost";
$username = "root"; 
$password = ""; 
$database = "exemplo_login";

$conexao = new mysqli($hostname, $username, $password, $database);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
