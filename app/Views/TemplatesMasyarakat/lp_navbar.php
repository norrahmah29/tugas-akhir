<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="<?= base_url('freeuser/assets/img/logo.png') ?>" alt=""> -->
            <h1 class="sitename">SIPP</h1> <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= base_url() ?>" class="active">Home</a></li>
                <li><a href="<?= base_url('login') ?>">Login</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>