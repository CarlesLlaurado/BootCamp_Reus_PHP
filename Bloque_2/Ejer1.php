<?php

    $salto = (PHP_SAPI === 'cli') ? "\n" : "<br>";
    $nombre = "Carles";

?>

<?php
    // Tipo 1: Estándar;
    echo "Tipo estándar: " . $nombre . $salto;
?>

<?
    // Tipo 2: Corto
    echo "Tipo Corto: " . $nombre . $salto;
?>

<?= 
    // Tipo 3: Corto echo
    "Tipo echo corto: " . $nombre . $salto;
?>
