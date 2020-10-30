<?php
//header


$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'global':

            include "paginas/prointegrador/index.php";
            break;

        default:
            break;
    }
} else {
    echo "Página não definida Global Tech!";
}