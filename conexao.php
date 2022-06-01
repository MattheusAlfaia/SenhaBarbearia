<?php

$usuario = 'epiz_31727034';
$senha = 'fNuGCqdgNzG';
$database = 'epiz_31727034_barbeariadaniel';
$host = 'sql102.epizy.com'; 

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>