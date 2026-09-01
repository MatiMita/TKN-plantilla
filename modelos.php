<?php require_once('lib/includeLibs.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modelos || TKN</title>
    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/organik-icon/organik-icons.css" />
    <link rel="stylesheet" href="assets/css/organik.css?v=7" />
</head>

<body class="home-page">

    <div class="preloader">
        <img class="preloader__image" width="200" src="assets/images/organizadas/logofinal.png" alt="" />
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
            <div class="modelos-hero__bg" style="background-image: url('assets/images/organizadas/modelocorregido.png');"></div>
        </section>

                <style>
                    .modelos-hero{position:relative;min-height:100vh}
                    .modelos-hero__bg{position:absolute;inset:0;background-size:contain;background-position:center center;background-repeat:no-repeat;background-color:#f3f0e9}
                </style>

                <main>
            <!-- Aquí puedes añadir contenido adicional debajo del hero si lo deseas -->
        </main>

        <footer class="site-footer footer-white">
            <?php include 'html/pie_pagina.html'; ?>
        </footer>
    </div>

    <!-- Mobile Nav -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>
            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/organizadas/logofinal.png" width="155" alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li><i class="organik-icon-email"></i><a href="mailto:gustavo.dick@tkn-global.com">gustavo.dick@tkn-global.com</a></li>
                <li><i class="organik-icon-calling"></i><a href="tel:+59144596621">+591 4 4596621</a></li>
            </ul>
            <div class="mobile-nav__top">
                <div class="lang-switcher lang-switcher--mobile" aria-label="Selector de idioma" style="justify-content:center; margin: 12px auto; width: fit-content;">
                    <button class="lang-btn" data-language="es" aria-label="Español" title="Español">
                        <span class="lang-flag">🇧🇴</span>
                        <span class="lang-code">ES</span>
                    </button>
                    <div class="lang-divider"></div>
                    <button class="lang-btn" data-language="en" aria-label="English" title="English">
                        <span class="lang-flag">🇺🇸</span>
                        <span class="lang-code">EN</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/59144596621" class="whatsapp-float" target="_blank" rel="noopener" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/js/organik.js"></script>
    <!-- Translation System -->
    <script src="assets/js/translations.js"></script>
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

