<?php
session_start();

// Verificar si se recibe el idioma desde la solicitud AJAX
if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];
    if (in_array($lang, ['es', 'en'])) {
        $_SESSION['lang'] = $lang;
    }
}