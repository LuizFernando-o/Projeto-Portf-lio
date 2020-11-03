<?php
//header

/*
$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'music':

            include_once "paginas/MusicStore/index.php";
            break;


        case 'inicial':
            include_once "paginas/MusicStore/paginas/includes/header.php";
            include_once "paginas/MusicStore/paginas/inicial.php";
            include_once "paginas/MusicStore/paginas/includes/footer.php";
            break;

        default:
            break;
    }
} else {
    echo "Página não definida Music Store!";
} */

//<?php
//header
include_once "paginas/MusicStore/paginas/includes/header.php";



//páginas

$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'music':
            include_once "paginas/MusicStore/paginas/includes/header.php";
            include_once "paginas/MusicStore/paginas/inicial.php";
            include_once "paginas/MusicStore/paginas/includes/footer.php";
            break;

        case 'inicial':
            include_once "paginas/MusicStore/paginas/inicial.php";
            break;
        case 'sobre':
            include_once "paginas/MusicStore/paginas/sobre.php";
            break;
        case 'produtos':
            include_once "paginas/MusicStore/paginas/produtos.php";
            break;
        case 'produtoComprar':
            include_once "paginas/MusicStore/paginas/produtoComprar.php";
            break;
        case 'contato':
            include_once "paginas/MusicStore/paginas/contato.php";
            break;

        default:
            break;
    }
} else {
    echo "Página não definida";
    include_once "paginas/MusicStore/paginas/inicial.php";
}



//footer
include_once "paginas/MusicStore/paginas/includes/footer.php";
