<?php
//header


$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'music':

            include "paginas/MusicStore/index.php";
            break;

        default:
            break;
    }
} else {
    echo "Página não definida Music Store!";
}
