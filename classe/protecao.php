<?php

    if (!function_exists('protecao')) {
        function protecao() {
            if (!isset($_SESSION)) {
                session_start();
            }
            if (!isset($_SESSION['login']) || !is_numeric($_SESSION['login'])) {
                header("Location: ../index.php");
            }
        }
    }
    
    function verifica_nivel($nivel){    
        if($_SESSION['nivel'] != $nivel){
            echo "<script>alert:'Acesso negado: Você não tem permissão para acessar essa página'";
            header("Location: menu-extensao.php");
        }
    }

