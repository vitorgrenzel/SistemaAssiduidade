<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "db_proj_assiduidade";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno){
    echo "Falha de conexão: (". $mysqli->connect_errno.")".$mysqli->connect_errno;
}



