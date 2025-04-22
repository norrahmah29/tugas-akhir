<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Surat Kehilangan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('data_suratkehilangan'); ?>">Data Surat Kehilangan</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Edit Data Surat Kehilangan</h5>
                        <form action="<?= base_url('/update_suratkehilangan/' . esc($kehilangan['id_suratketeranganhilang'])); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="no_surat" class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= esc($kehilangan['no_surat']); ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($kehilangan['nama']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="Laki-laki" <?= ($kehilangan['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                        <option value="Perempuan" <?= ($kehilangan['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= esc($kehilangan['tempat_lahir']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= esc($kehilangan['tanggal_lahir']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nik" name="nik" value="<?= esc($kehilangan['nik']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="agama" name="agama" value="<?= esc($kehilangan['agama']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="alamat" name="alamat" required><?= esc($kehilangan['alamat']); ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal_hilang" class="col-sm-2 col-form-label">Tanggal Hilang</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_hilang" name="tanggal_hilang" value="<?= esc($kehilangan['tanggal_hilang']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi_hilang" class="col-sm-2 col-form-label">Lokasi Hilang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi_hilang" name="lokasi_hilang" value="<?= esc($kehilangan['lokasi_hilang']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="keperluan" name="keperluan" required><?= esc($kehilangan['keperluan']); ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggal_surat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="<?= esc($kehilangan['tanggal_surat']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama_kepala_desa" class="col-sm-2 col-form-label">Nama Kepala Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_kepala_desa" name="nama_kepala_desa" value="<?= esc($kehilangan['nama_kepala_desa']); ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                    <a href="/suratketeranganhilang" class="btn btn-secondary">Kembali</a>
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