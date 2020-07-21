<?php

    // Inicia a sessão
    session_start();

    // Recebe a session de logado
    $logado = $_SESSION['logado'];

    // Verifica se está logado
    if($logado == 1){
        // Direciona para dentro do sistema
        header('Location:main.php?pag='.$_SESSION['pag']);
    }
    // Mata todos os parametros de sessão e direciona para login
    else{
        session_destroy();
        header("Location:login.php");
    }
    
?>
