<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Arsip Surat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Arsip Surat</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Arsip Surat</h5>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Surat</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($arsip as $row): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= esc($row['no_surat']); ?></td>
                                        <td><?= esc($row['jenis_surat']); ?></td>
                                        <td><?= date('d-m-Y', strtotime($row['tanggal_surat'])); ?></td>
                                        <td>
                                            <a href="<?= base_url('/arsip/download/' . $row['id']); ?>" class="btn btn-success btn-sm">
                                                <i class="bi bi-download"></i> Download
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if (empty($arsip)): ?>
                                    <tr>
                                        <td colspan="5" class="text-center">Belum ada arsip surat.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?= $this->include('TemplatesMasyarakat/footer'); ?>