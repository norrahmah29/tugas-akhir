<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Surat Pindah</h1>
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
                        <h5 class="card-title">Surat Keterangan Pindah</h5>

                        <form action="/masyarakat/ajukansurat/suratpindah/generatesurat" method="post">
                            <?= csrf_field() ?>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">No Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat">
                                </div>
                            </div>

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
                                        <option value="">-- Pilih --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat, Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required>
                                </div>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" name="tanggal_lahir" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kewarganegaraan <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="kewarganegaraan" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Agama <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="agama" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status Perkawinan <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status_perkawinan" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Pekerjaan <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pekerjaan" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Pendidikan <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="pendidikan" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                        <option value="SD">SD</option>
                                        <option value="SLTP">SLTP</option>
                                        <option value="SLTA">SLTA</option>
                                        <option value="Diploma I/II/III">Diploma I/II/III</option>
                                        <option value="S1/S2">S1/S2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat Asal <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat_asal" style="height: 80px;" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">NIK <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik" id="nik" maxlength="16" pattern="\d{16}" title="NIK harus 16 angka" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat Tujuan Pindah <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat_tujuan" style="height: 80px;" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alasan Pindah <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alasan_pindah" required>
                                </div>
                            </div>

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

<script>
    // Membatasi input NIK hanya angka
    document.getElementById('nik').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);
    });
</script>

<?= $this->include('TemplatesMasyarakat/footer'); ?>