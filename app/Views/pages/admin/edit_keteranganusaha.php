<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Keterangan Usaha</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('data_keteranganusaha'); ?>">Data Keterangan Usaha</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Edit Keterangan Usaha</h5>
                        <form action="<?= base_url('/update_keteranganusaha/' . esc($data['id_suratketeranganusaha'])); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($data['nama']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= esc($data['alamat']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenis_usaha" class="col-sm-2 col-form-label">Jenis Usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" value="<?= esc($data['jenis_usaha']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="keterangan" name="keterangan" required><?= esc($data['keterangan']); ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/data_keteranganusaha" class="btn btn-secondary">Batal</a>
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