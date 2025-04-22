<?= $this->include('Template/lp_header'); ?>
<?= $this->include('Template/lp_navbar'); ?>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 text-center">
                        <h2 class="">Selamat Datang di SIPP</h2>
                        <p>Sistem Informasi Pendataan Pelanggaran (SIPP) pada Satpol PP Kabupaten Tanah Laut. Aplikasi ini membantu dalam pendataan dan pengelolaan pelanggaran yang terjadi di wilayah Kabupaten Tanah Laut.</p>
                        <!-- <a href="#get-started" class="btn-get-started">Get Started</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div id="section-fqREP4OWmC-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item">
                <img src="/freeuser/assets/img/hero-carousel/1.jpg" alt="">
            </div>

            <div class="carousel-item active">
                <img src="/freeuser/assets/img/hero-carousel/2.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img src="/freeuser/assets/img/hero-carousel/3.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img src="/freeuser/assets/img/hero-carousel/4.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img src="/freeuser/assets/img/hero-carousel/5.jpg" alt="">
            </div>

            <a class="carousel-control-prev" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- /Hero Section -->

    <!-- Informasi Section -->
    <section id="informasi" class="informasi section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="">Informasi</h2>
            <p>SIPP menyediakan berbagai fitur untuk memudahkan pendataan pelanggaran, termasuk pelaporan, pencatatan, dan analisis data pelanggaran.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="/freeuser/assets/img/informasi-1.jpg" alt="" style="width: 100%; height: auto;"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pendataan Pelanggaran</h4>
                                    <p>Sistem ini memungkinkan petugas untuk mencatat pelanggaran yang terjadi secara real-time dan terintegrasi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="/freeuser/assets/img/informasi-2.jpg" alt="" style="width: 100%; height: auto;"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pelaporan dan Analisis</h4>
                                    <p>SIPP menyediakan fitur pelaporan dan analisis data pelanggaran untuk membantu dalam pengambilan keputusan dan kebijakan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="/freeuser/assets/img/informasi-3.jpg" alt="" style="width: 100%; height: auto;"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Integrasi Data</h4>
                                    <p>Sistem ini terintegrasi dengan berbagai sumber data untuk memastikan keakuratan dan kelengkapan informasi pelanggaran.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="/freeuser/assets/img/informasi-4.jpg" alt="" style="width: 100%; height: auto;"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Kemudahan Akses</h4>
                                    <p>SIPP dapat diakses oleh petugas Satpol PP Kabupaten Tanah Laut kapan saja dan di mana saja melalui perangkat yang terhubung ke internet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>

    </section><!-- /Informasi Section -->

</main>

<?= $this->include('Template/lp_footer'); ?>