<?php
//header


$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'curriculo':

            include "paginas/CurriculoWEB/index.php";
            break;

        default:
            break;
    }
} else {
    echo "Página não definida Curriculo!";
}
