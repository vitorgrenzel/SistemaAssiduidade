<?php

include ("../classe/conexao.php");

if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo = $_POST['titulo'];
}
if(isset($_POST['tipo']) && !empty($_POST['tipo'])){
     $tipo = $_POST['tipo'];
}
if(isset($_POST['dt_inicio']) && !empty($_POST['dt_inicio'])){
    $dt_inicio = $_POST['dt_inicio'];
}
if(isset($_POST['dt_fim']) && !empty($_POST['dt_fim'])){
    $dt_fim = $_POST['dt_fim'];
}
if(isset($_POST['sig_nr']) && !empty($_POST['sig_nr'])){
    $nr_sig = $_POST['sig_nr'];
}

//Inserir as informações do Projeto
$sql_code = "INSERT INTO Projeto (titulo, tipo, dt_inicio, dt_fim, sig_nr) VALUES('$titulo','$tipo','$dt_inicio','$dt_fim')";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

//Funcao para retornar o ID do projeto que acabou de ser inserido
$sql_code_3 = "SELECT id FROM Projeto WHERE nr_sig = '$nr_sig'";
$sql_query_3 = $mysqli->query($sql_code_3) or die($mysqli->error);

$idProjeto = mysql_result ($sql_query_3,"id");

// Vincular Bolsistas 
foreach ($_POST['bolsista'] as $key => $value) {
    $idBolsista = $_POST['bolsista'][$key];
    $vinculo = $_POST['vinculo'][$key];
    $horas =  $_POST['horas'][$key];
    
    $sql_code_2= "INSERT INTO aluno_projeto (id_pessoa, id_projeto, vinculo, horas) VALUES ('$idBolsista', '$idProjeto', '$vinculo', '$horas')";
    $sql_query_2 = $mysqli->query($sql_code_2) or die($mysqli->error);
}
   

if (count($erro) == 0 || !isset($erro)) {
    echo "<script>alert('Projeto registrado com sucesso!'); location.href='../pages/menu-geral.html';</script>";
}
