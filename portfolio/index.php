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

        case 'tecnologias':
            include_once "paginas/tecnologias.php";
            break;

        case 'projetos':
            include_once "paginas/projetos.php";
            break;

        case 'outros':
            include_once "paginas/outros.php";
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
