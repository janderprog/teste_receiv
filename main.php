<?php

    // Inicia a sessão
    session_start();

    // Verifica se esta logado
    // $_SESSION['logado'] = 1;// Logado para teste
    if (!$_SESSION['logado']) {
        header("Location:logout.control.php");
    }
    // Inclui a Header
    require_once("includes/header.php");
    // Inclui o Menu do topo
    require_once("includes/menu_topo.php");
    // Inclui o menu lateral
    require_once("includes/menu_lateral.php");
    
?>

<main>
    <div class="container-fluid">

        <!-- Aqui vão os elementos de sua página -->
        <?php 
            // Inclui a seleção de Páginas
            require_once("includes/select_pages.php");
        ?>

    </div>
</main>
                

<?php require_once('includes/footer.php')?>