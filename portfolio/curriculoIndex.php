<?php
//header

/*
$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'curriculo':

            include_once "paginas/CurriculoWEB/index.php";
            break;

        default:
            break;
    }
} else {
    echo "Página não definida Curriculo!";
}
*/

//<?php
//header
include_once "paginas/CurriculoWEB/paginas/includes/header.php";

//pagina
include_once "paginas/CurriculoWEB/paginas/curriculo.php";

//footer
include_once "paginas/CurriculoWEB/paginas/includes/footer.php";

include_once "paginas/botaoVoltar.php";