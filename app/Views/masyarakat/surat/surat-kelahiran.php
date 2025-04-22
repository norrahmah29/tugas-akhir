<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Surat Keterangan Kelahiran</h1>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Surat Keterangan Kelahiran</h5>

                        <form action="/masyarakat/ajukansurat/surat-kelahiran/generatesurat" method="post">
                            <?= csrf_field() ?>

                            <!-- Nomor Surat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat" placeholder="Contoh: 400.12.2.2/54/Handil Suruk/2024" required>
                                </div>
                            </div>

                            <!-- Data Anak -->
                            <h5 class="card-title mt-4">Data Anak</h5>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ttl" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jenis_kelamin" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="status_pekerjaan" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" rows="2" required></textarea>
                                </div>
                            </div>

                            <!-- Data Orang Tua -->
                            <h5 class="card-title mt-4">Data Orang Tua</h5>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_ayah" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_ibu" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Anak Ke</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="anak_ke" required>
                                </div>
                            </div>

                            <!-- Tombol -->
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Generate Surat</button>
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