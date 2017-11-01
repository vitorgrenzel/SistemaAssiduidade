<?php

include ("../classe/conexao.php");

$sql = "SELECT p.id, p.nome
            FROM pessoa p
            WHERE nome LIKE '%%'
            LIMIT 10"; 
            
           # WHERE nome LIKE '%".$_GET['q']."%'
$result = $mysqli->query($sql);

$json = [];

while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['id'], 'text'=>$row['nome']];
}

echo json_encode($json);
