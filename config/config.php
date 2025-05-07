<?php
session_start();

// Establecer idioma predeterminado en español si no está configurado
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es';
}

// Cambiar idioma si se recibe un cambio a través de la URL
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if (in_array($lang, ['es', 'en'])) {
        $_SESSION['lang'] = $lang;
    }
}

// Cargar el archivo de idioma correspondiente
$langFile = 'lang_' . $_SESSION['lang'] . '.php';
$lang = include($langFile);
?>