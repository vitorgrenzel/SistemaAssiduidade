<?php

include "MySQLiConnection.class.php";

function pegar_cidades(){
  $conn = new MySQLiConnection();//banco
  
  $estado  = $_POST['estado'];
  $sql = "SELECT c.id, c.nome
          FROM estado e
          join cidade c on e.id=c.cidade_id_estado
          where e.id = ". $estado; //sua consulta
  
  $resultado = $conn->query($sql);
  $resultado = $resultado->fetch_all(MYSQLI_ASSOC);
  
  
  echo json_encode($resultado);//joga o resultado para o javascript
}

$funcao = $_POST['funcao'];
switch($funcao){
  case 1:  pegar_cidades();  break;
  //case 2: outra funcao
  // e assim por diante
  default: "";
}

?>