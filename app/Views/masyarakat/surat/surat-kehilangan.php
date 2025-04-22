<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Kehilangan</h1>
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
                        <h5 class="card-title">Surat Keterangan Kehilangan</h5>

                        <form action="/masyarakat/ajukansurat/suratkehilangan/generatesurat" method="post">
                            <?= csrf_field() ?>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="jenis_kelamin" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat / Tgl. Lahir <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ttl" placeholder="Contoh: Handil Suruk, 27 Maret 1999" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">NIK <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="nik" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Agama <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="agama" required>
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" style="height: 100px" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kehilangan <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="KTP" id="ktp">
                                        <label class="form-check-label" for="ktp">Kartu Tanda Penduduk (KTP)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="SIM" id="sim">
                                        <label class="form-check-label" for="sim">Surat Izin Mengemudi (SIM)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="STNK" id="stnk">
                                        <label class="form-check-label" for="stnk">Surat Tanda Nomor Kendaraan (STNK)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="BPKB" id="bpkb">
                                        <label class="form-check-label" for="bpkb">Buku Pemilik Kendaraan Bermotor (BPKB)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="ATM" id="atm">
                                        <label class="form-check-label" for="atm">Kartu ATM</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="BPJS" id="bpjs">
                                        <label class="form-check-label" for="bpjs">Kartu BPJS</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="Buku Nikah" id="buku_nikah">
                                        <label class="form-check-label" for="buku_nikah">Buku Nikah</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="Akta Kelahiran" id="akte_kelahiran">
                                        <label class="form-check-label" for="akte_kelahiran">Akta Kelahiran</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kehilangan[]" value="Kartu Keluarga" id="kk">
                                        <label class="form-check-label" for="kk">Kartu Keluarga (KK)</label>
                                    </div>

                                    <!-- Tambahkan jenis kehilangan lain jika perlu -->
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Terjadi Pada <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_kejadian" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Di Sekitar <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="lokasi_kejadian" style="height: 100px" required></textarea>
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

<?= $this->include('TemplatesMasyarakat/footer'); ?>