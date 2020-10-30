<?php
//header
include_once "paginas/includes/header.php";




//páginas

$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;
        case 'sobre':
            include_once "paginas/sobre.php";
            break;
        case 'produtos':
            include_once "paginas/produtos.php";
            break;
        case 'produtoComprar':
            include_once "paginas/produtoComprar.php";
            break;
        case 'contato':
            include_once "paginas/contato.php";
            break;

        default:
            break;
    }
} else {
    echo "Página não definida";
    include_once "paginas/inicial.php";
}



//footer
include_once "paginas/includes/footer.php";
