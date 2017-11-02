<?php
header('Content-type: text/html; charset=ISO-8859-1');

$idestado = $_GET['estado'];

include_once 'connectionDB.class.php';

//abre a conexão com o MySQL
$conn = new MySQLiConnection(); 

$result = $conn->query("SELECT * FROM cidade WHERE cidade_id_estado = ".$idestado);
while($row = $result->fetch_array() ){
    echo "<option value='".$row['id']."'>".$row['nome']."</option>";
}
?>