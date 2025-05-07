<!DOCTYPE html>
<html lang="<?php echo $lang['lang']; ?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php if( $section === 'inicio'){echo "GRONCHO";} else {echo $title. " | GRONCHO";}?></title>
        <meta name="description" content="<?php echo $lang['description']; ?>">
        <meta name="keywords" content="Productora audiovisual, cine, Argentina, Groncho, co-producción, cine independiente, producciones">

        <!--CSS-->
        <link rel="preload" as="video" href="assets/videos/reel.mp4" type="video/mp4">
        <link rel="preload" as="video" href="assets/videos/reel-mobile.mp4" type="video/mp4">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.minify.css?29042025">
        <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!--share Facebook-->
        <meta property="og:url" content="https://gronchoestudio.com">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php if( $section === 'inicio'){echo "GRONCHO Producciones";} else {echo $title. " | GRONCHO";}?>">
        <meta property="og:description" content="<?php echo $lang['description']; ?>">
        <meta property="og:image" content="https://gronchoestudio.com/assets/images/og/og-<?php 
        if ($section === "inicio") { echo "home";} 
        elseif ($section === "cuidadoras") { echo "cuidadoras";}
        elseif ($section === "ccl") { echo "ccl";}
        elseif ($section === "delia") { echo "delia";}
        elseif ($section === "endh") { echo "endh";}
        elseif ($section === "magicas") { echo "magicas";}
        elseif ($section === "loideal") { echo "loideal";}
        elseif ($section === "manuel") { echo "manuel";}
        elseif ($section === "mocha") { echo "mocha";} 
        elseif ($section === "mocha2") { echo "mocha2";}
        elseif ($section === "monte") { echo "monte";}
        elseif ($section === "tesis") { echo "tesis";}
        elseif ($section === "tristan") { echo "tristan";}
        ?>.png">

        <!--share Twitter-->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="https://gronchoestudio.com">
        <meta property="twitter:url" content="https://gronchoestudio.com">
        <meta name="twitter:title" content="<?php if( $section === 'inicio'){echo "GRONCHO Producciones";} else {echo $title. " | GRONCHO";}?>">
        <meta name="twitter:description" content="<?php echo $lang['description']; ?>">
        <meta name="twitter:image" content="https://gronchoestudio.com/assets/images/og/og-<?php 
        if ($section === "inicio") { echo "home";} 
        elseif ($section === "cuidadoras") { echo "cuidadoras";}
        elseif ($section === "ccl") { echo "ccl";}
        elseif ($section === "delia") { echo "delia";}
        elseif ($section === "endh") { echo "endh";}
        elseif ($section === "elsecreto") { echo "elsecreto";}
        elseif ($section === "loideal") { echo "loideal";}
        elseif ($section === "manuel") { echo "manuel";}
        elseif ($section === "mocha") { echo "mocha";} 
        elseif ($section === "mocha2") { echo "mocha2";}
        elseif ($section === "monte") { echo "monte";}
        elseif ($section === "tesis") { echo "tesis";}
        elseif ($section === "tristan") { echo "tristan";}
        ?>.png">

        <!--Favicon-->
        <link rel="apple-touch-icon" href="https://gronchoestudio.com/assets/images/favicon/60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://gronchoestudio.com/assets/images/favicon/76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://gronchoestudio.com/assets/images/favicon/120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://gronchoestudio.com/assets/images/favicon/152.png">
        <link rel="icon" type="image/png" href="https://gronchoestudio.com/assets/images/favicon/favicon.png">

        <!--FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body>