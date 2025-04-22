<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Domisili</h1>
        <nav>
            <ol class="breadcrumb">
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Surat Domisili Warga</h5>

                        <form action="/masyarakat/ajukansurat/surat-domisiliwarga/generatesurat" method="post">
                            <?= csrf_field() ?>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat" placeholder="Contoh: 400.12.2.2/54/Handil Suruk/2024" required>
                                </div>
                            </div>

                            <!-- Data Kepala Desa -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Kepala Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kepala_desa" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jabatan Kepala Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jabatan_kepala_desa" value="Kepala Desa" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kecamatan_kepala" value="Bumi Makmur" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kabupaten</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kabupaten_kepala" value="Tanah Laut" required>
                                </div>
                            </div>

                            <hr>

                            <!-- Data Orang yang Diterangkan -->
                            <h5 class="card-title mt-4">Menerangkan dengan Sebenarnya Bahwa:</h5>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="Number" class="form-control" name="nik" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" rows="2" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="desa" value="Handil Suruk" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kecamatan" value="Bumi Makmur" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kabupaten</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kabupaten" value="Tanah Laut" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Provinsi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="provinsi" value="Kalimantan Selatan" required>
                                </div>
                            </div>



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