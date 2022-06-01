<?php
    include('../config/app.php');
?>
<header class="main-nav">
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="<?= $app['base_url'] ?>/dashboard">
                            <i data-feather="box"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="<?= $app['base_url'] ?>/table_training">
                            <i data-feather="airplay"></i>
                            <span>Table Training</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="<?= $app['base_url'] ?>/user">
                            <i data-feather="user"></i>
                            <span>User</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>