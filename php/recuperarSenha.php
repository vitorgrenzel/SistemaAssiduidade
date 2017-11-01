<?php

include ("../classe/conexao.php");

if (isset($_POST['ok'])) {

    $email = $mysqli->escape_string($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro[] = "E-mail inválido";
    }
    
    $sql_code = "SELECT senha,id FROM pessoa WHERE email='$_SESSION[email]'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows; 
    
    if (count($erro) == 0 && $total > 0) {
        $novasenha = substr(md5(time()), 0, 6);
        $nscriptografada = md5(md5($novasenha));


        if (mail($email, "Sua nova senha", "Sua nova senha: " . $novasenha)) {
            $sql_code = "UPDATE pessoa SET senha = '$nscriptografada' WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
            
            if($sql_query){
                $erro[] = "Senha alterada com sucesso!";
            }
        }
    }
}
