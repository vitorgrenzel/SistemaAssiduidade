<?php

include ("../classe/conexao.php");

if(isset($_POST['login']) && strlen($_POST['login'])>0){
    if(!isset($_SESSION)){
        session_start();
    }
    
    $_SESSION['user'] = $mysqli->escape_string($_POST['login']);
    $senha = md5(md5($_POST['senha']));
    
    $sql_code = "SELECT senha,id,nome,nivel_de_acesso FROM pessoa WHERE login='$_SESSION[user]'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if($total === 0){
        echo "<script>alert('Este usuario não pertence a nenhum usuário.');</script>";
        $erro[] = "Este usuario não pertence a nenhum usuário.";
    }
    else{
        if($dado['senha'] === $senha){  
            $_SESSION['login'] = $dado['id'];
            $_SESSION['nivel'] = $dado['nivel_de_acesso'];
            $_SESSION['nome'] = $dado['nome'];
        }
        else{
            echo "<script>alert('Senha incorreta');</script>";
            $erro[] = "Senha incorreta.";
        }
    }
    
    if(!isset($erro) || count($erro) == 0){
        echo "<script> window.location.href='../pages/menu-geral.php'; alert('Login efetuado com sucesso') </script>";
    }
}

