<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Keterangan Tidak Mampu</h1>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keterangan Tidak Mampu</h5>

                        <form action="/tambah_surat_tidak_mampu" method="post">
                            <?= csrf_field() ?>

                            <!-- No Surat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat" required>
                                </div>
                            </div>

                            <!-- Nama -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>

                            <!-- Bin/Binti -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Bin/Binti <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bin_binti" required>
                                </div>
                            </div>

                            <!-- NIK -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">NIK <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="nik" required>
                                </div>
                            </div>

                            <!-- Tempat / Tanggal Lahir -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat / Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ttl" required>
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jenis_kelamin" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Agama -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Agama <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="agama" required>
                                </div>
                            </div>

                            <!-- Pekerjaan -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Pekerjaan <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pekerjaan" required>
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                                </div>
                            </div>

                            <!-- Tombol -->
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Generate</button>
                                    <a href="/masyarakat/ajukansurat" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->include('TemplatesMasyarakat/footer'); ?>