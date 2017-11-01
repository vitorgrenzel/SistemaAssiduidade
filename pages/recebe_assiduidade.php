<?php

foreach ($_POST['bolsista'] as $key => $value) {
    echo "Bolsista: " . $_POST['bolsista'][$key] . "   |    ";

    if ($_POST['vinculo'][$key] == 1) {
        $vinculo = "Bolsista";
    } else if ($_POST['vinculo'][$key] == 2) {
        $vinculo = "Voluntario";
    } else {
        $vinculo = "Nao selecionada";
    }
    
    echo "Vínculo: " . $vinculo . "   |    ";

    echo "Horas: " . $_POST['horas'][$key]. "<br>";
}
