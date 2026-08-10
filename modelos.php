<?php require_once('lib/includeLibs.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modelos || TKN</title>
    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/organik.css" />
</head>

<body class="home-page">

    <div class="preloader">
        <img class="preloader__image" width="200" src="assets/images/organizadas/logo.png" alt="" />
    </div>

    <div class="page-wrapper">
        <header class="main-header">
            <?php include 'html/cabecera_principal.html'; ?>
        </header>

        <?php
            $t = new template;
            $t->SetTemplate('html/cabecera_menu_noletters.html');
            $t->SetParameter('menu', 'Modelos');
            $t->SetParameter('subtitle', 'Modelo de negocio y propuesta');
            echo $t->Display();
        ?>

        <section class="modelos-hero">
            <div class="modelos-hero__bg" style="background-image: url('assets/images/organizadas/modelonegocio.jpg');"></div>
        </section>

                <style>
                    .modelos-hero{position:relative;min-height:100vh}
                    .modelos-hero__bg{position:absolute;inset:0;background-size:contain;background-position:center center;background-repeat:no-repeat;background-color:#f3f0e9}
                </style>

                <main>
            <!-- Aquí puedes añadir contenido adicional debajo del hero si lo deseas -->
        </main>

        <footer class="site-footer background-black-2">
            <?php include 'html/pie_pagina.html'; ?>
        </footer>
    </div>

    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/js/organik.js"></script>
        <script>
            // Fallback: ensure preloader is hidden even if other scripts error
            document.addEventListener('DOMContentLoaded', function() {
                var p = document.querySelector('.preloader');
                if (p) p.style.display = 'none';
            });
            window.addEventListener('load', function() {
                var p = document.querySelector('.preloader');
                if (p) p.style.display = 'none';
            });
        </script>

</body>

</html>

