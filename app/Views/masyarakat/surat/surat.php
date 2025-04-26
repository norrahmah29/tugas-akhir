<?= $this->include('TemplatesMasyarakat/Header'); ?>
<?= $this->include('TemplatesMasyarakat/Navbar'); ?>
<?= $this->include('TemplatesMasyarakat/Sidebar'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="d-flex flex-wrap justify-content-start gap-3">

            <?php
            $suratList = [
                ['title' => 'Surat Domisili Pertanian', 'url' => 'suratdomisili'],
                ['title' => 'Surat Domisili Bangunan', 'url' => 'suratdomisilibangunan'],
                ['title' => 'Surat Domisili Warga', 'url' => 'suratdomisiliwarga'],
                ['title' => 'Surat Keterangan Pindah', 'url' => 'suratpindah'],
                ['title' => 'Surat Keterangan Kelahiran', 'url' => 'suratkelahiran'],
                ['title' => 'Surat Ahli Waris', 'url' => 'suratahliwaris'],
                ['title' => 'Surat Keterangan Kematian', 'url' => 'suratketerangankematian'],
                ['title' => 'Surat Kehilangan', 'url' => 'suratkehilangan'],
                ['title' => 'Surat Pengantar SKCK', 'url' => 'suratpengantarskck'],
                ['title' => 'Surat Keterangan Suami Istri', 'url' => 'suratsuamiistri'],
                ['title' => 'Surat Keterangan Janda/Duda/Perjaka', 'url' => 'suratketeranganjanda'],
                ['title' => 'Surat Keterangan Tidak Mampu', 'url' => 'surattidakmampu'],
                ['title' => 'Surat Keterangan Usaha', 'url' => 'suratusaha'],
                ['title' => 'Surat Pengantar KK dan KTP', 'url' => 'suratpengantar'],
                ['title' => 'Surat Keterangan Belum Bekerja', 'url' => 'suratbelumbekerja'],
            ];
            ?>

            <?php foreach ($suratList as $surat) : ?>
                <a href="<?= base_url('masyarakat/ajukansurat/' . $surat['url']); ?>" class="text-decoration-none">
                    <div class="card info-card sales-card shadow-sm" style="width: 250px; height: 160px;">
                        <div class="card-body d-flex flex-column justify-content-between h-100">
                            <h5 class="card-title text-dark"><?= $surat['title']; ?></h5>
                            <div class="d-flex align-items-center mt-3">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: #f0f0f0;">
                                    <i class="bi bi-envelope-arrow-up fs-4 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    </section>

</main><!-- End #main -->

<?= $this->include('TemplatesMasyarakat/Footer'); ?>