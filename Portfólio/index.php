<?php
//header
include_once "paginas/includes/header.php";

//paginas

$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'portfolio':
            include_once "paginas/inicio.php";
            break;

        case 'resumo':
            include_once "paginas/resumo.php";
            break;

        case 'contato':
            include_once "paginas/contato.php";
            break;

        default:
            echo "Página não definida!";
            break;
    }
} else {
    include_once "paginas/inicio.php";
}


//footer
include_once "paginas/includes/footer.php";
