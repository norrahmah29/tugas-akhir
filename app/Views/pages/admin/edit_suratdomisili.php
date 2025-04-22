<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Domisili</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('data_domisili'); ?>">Data Domisili</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Edit Data Domisili</h5>
                        <form action="<?= base_url('/update_suratdomisili/' . esc($domisili['id_suratdomisili'])); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="no_surat" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= esc($domisili['no_surat']); ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama_gapoktan" class="col-sm-2 col-form-label">Nama Gapoktan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_gapoktan" name="nama_gapoktan" value="<?= esc($domisili['nama_gapoktan']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl_pembentukan" class="col-sm-2 col-form-label">Tanggal Pembentukan</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tgl_pembentukan" name="tgl_pembentukan" value="<?= esc($domisili['tgl_pembentukan']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="alamat" name="alamat" required><?= esc($domisili['alamat']); ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ketua" class="col-sm-2 col-form-label">Ketua</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ketua" name="ketua" value="<?= esc($domisili['ketua']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sekretaris" class="col-sm-2 col-form-label">Sekretaris</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sekretaris" name="sekretaris" value="<?= esc($domisili['sekretaris']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bendahara" class="col-sm-2 col-form-label">Bendahara</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="bendahara" name="bendahara" value="<?= esc($domisili['bendahara']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                    <a href="/suratdomisili" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->include('Templates/footer'); ?>