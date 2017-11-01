<?php

include ("classe/conexao.php");

$sql = "SELECT proj.id, proj.titulo
            FROM Projeto proj
            WHERE title LIKE '%".$_GET['q']."%'
            LIMIT 10"; 
$result = $mysqli->query($sql);

$json = [];

while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['id'], 'text'=>$row['title']];
}

echo json_encode($json);
