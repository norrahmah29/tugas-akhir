<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Surat Keterangan Kematian</h1>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keterangan Kematian</h5>

                        <form action="/masyarakat/ajukansurat/keterangankematian/generatesurat" method="post">
                            <?= csrf_field() ?>

                            <!-- Informasi Surat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat">
                                </div>
                            </div>

                            <!-- Informasi Pribadi -->
                            <h6 class="mt-4">Yang bertanda tangan di bawah ini Kepala Desa Handil Suruk Kecamatan Bumi Makmur Kabupaten Tanah Laut, dengan ini menerangkan bahwa:</h6>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>

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

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat/Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ttl" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Agama <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="agama" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" required>
                                </div>
                            </div>

                            <!-- Informasi Kematian -->
                            <h6 class="mt-4">Telah meninggal dunia:</h6>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Hari/Tanggal Kematian <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hari_tanggal_kematian" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jam Kematian <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="jam_kematian" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat Kematian <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat_kematian" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Penyebab Kematian <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="penyebab_kematian" required>
                                </div>
                            </div>

                            <!-- Tombol Aksi -->
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