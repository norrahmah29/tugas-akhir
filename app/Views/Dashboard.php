<?= $this->include('Template/Header'); ?>
<?= $this->include('Template/Navbar'); ?>
<?= $this->include('Template/Sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Kartu Dashboard (Kosong, hanya tampilan) -->
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Surat Masuk</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-envelope-arrow-up"></i>
                            </div>
                            <div class="ps-3">
                                <h6>-</h6> <!-- Data belum diisi -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Surat Keluar</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-sendbi bi-envelope-arrow-down"></i>
                            </div>
                            <div class="ps-3">
                                <h6>-</h6> <!-- Data belum diisi -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Surat Tugas</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <div class="ps-3">
                                <h6>-</h6> <!-- Data belum diisi -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Customers Card -->

        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('Template/Footer'); ?>