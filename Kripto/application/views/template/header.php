<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Landing page for Cryptocurrency company" />
    <meta name="author" content="Rizki Mulyawan & Jose Angel Rey" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet" />


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- ScrollReveal Js -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php echo base_url('assets/'); ?>./js/scroll-reveal.js" defer></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>./assets/favicon.svg" type="image/x-icon" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>./scss/main.css" />
    <link href="<?php echo base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <title><?php echo $judul ?></title>
</head>

<body>
<div class="main-container">
        <!-- Main header -->
        <header class="main-header">
            <div class="header-container">
                <!-- Header navbar -->
                <nav class="main-header-navbar">
                    <img src="<?php echo base_url('assets/'); ?>./assets/Logo.svg" alt="CRAPPO logo" class="main-header-navbar__logo" />

                    <ul class="main-header-navbar__nav">
                        <li class="main-header-navbar__nav__item">
                            <a href="<?php echo base_url('index.php/home'); ?>" class="main-header-navbar__nav__link">Beranda</a>
                        </li>
                        <li class="main-header-navbar__nav__item">
                            <a href="<?php echo base_url('index.php/pasar'); ?>" class="main-header-navbar__nav__link">Pasar</a>
                        </li>
                        <li class="main-header-navbar__nav__item">
                            <a href="#about" class="main-header-navbar__nav__link">KripNews</a>
                        </li>
                        <li class="main-header-navbar__nav__item">
                            <a href="#contact" class="main-header-navbar__nav__link">About</a>
                        </li>
                    </ul>

                    <div class="main-header-navbar__login">
                        <a href="#" class="main-header-navbar__login__login-btn">Login</a>
                        <a href="#" class="main-header-navbar__login__register-btn">Register</a>
                    </div>
                </nav>
