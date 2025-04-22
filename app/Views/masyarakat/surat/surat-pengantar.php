<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Surat Pengantar Administrasi Kependudukan</h1>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Surat Pengantar Administrasi Kependudukan</h5>

                        <form action="/masyarakat/ajukansurat/surat-pengantar/generatesurat" method="post">
                            <?= csrf_field() ?>

                            <!-- Nomor Surat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nomor Surat <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat" placeholder="Contoh: 400.12.2.1/__/Handil Suruk/2024" required>
                                </div>
                            </div>

                            <!-- Tanggal Surat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tanggal Surat <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_surat" required>
                                </div>
                            </div>

                            <!-- Data Penerima -->
                            <h5 class="card-title mt-4">Data Penerima</h5>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Penerima <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_penerima" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat_penerima" rows="2" required></textarea>
                                </div>
                            </div>

                            <!-- Dokumen yang Diajukan -->
                            <h5 class="card-title mt-4">Dokumen yang Diajukan</h5>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kartu Keluarga <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="dokumen_kk" value="1" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">E_KTP <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="dokumen_ktp" value="1" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Akta Kematian <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="dokumen_akta_kematian" value="1" required>
                                </div>
                            </div>

                            <!-- Tabel Dokumen Warga -->
                            <h5 class="card-title mt-4">Daftar Warga</h5>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. Kartu Keluarga</th>
                                        <th>NIK</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" class="form-control" name="nama_1" required></td>
                                        <td><input type="text" class="form-control" name="kk_1" required></td>
                                        <td><input type="number" class="form-control" name="nik_1" required></td>
                                        <td><input type="text" class="form-control" name="keterangan_1" required></td>
                                        <td><input type="number" class="form-control" name="jumlah_1" value="1" required></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" class="form-control" name="nama_2" required></td>
                                        <td><input type="text" class="form-control" name="kk_2" required></td>
                                        <td><input type="number" class="form-control" name="nik_2" required></td>
                                        <td><input type="text" class="form-control" name="keterangan_2" required></td>
                                        <td><input type="number" class="form-control" name="jumlah_2" value="1" required></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" class="form-control" name="nama_3" required></td>
                                        <td><input type="text" class="form-control" name="kk_3" required></td>
                                        <td><input type="number" class="form-control" name="nik_3" required></td>
                                        <td><input type="text" class="form-control" name="keterangan_3" required></td>
                                        <td><input type="number" class="form-control" name="jumlah_3" value="1" required></td>
                                    </tr>
                                </tbody>
                            </table>

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