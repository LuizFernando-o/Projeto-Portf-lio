<?php

include_once "paginas/prointegrador/paginas/includes/header.php";

include_once "paginas/prointegrador/paginas/inicial.php";


$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'termos':
            include_once "paginas/prointegrador/paginas/termosdeuso.php";
            break;
        case 'politica':
            include_once "paginas/prointegrador/paginas/politica.php";
            break;
        default:
            break;
    }
} else {
    include_once "paginas/prointegrador/paginas/inicial.php";
}

include_once "paginas/prointegrador/paginas/sobre.php";
include_once "paginas/prointegrador/paginas/includes/foother.php";

include_once "paginas/botaoVoltar.php";
