<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <form action="<?= base_url('masyarakat/ajukansurat/suratkehilangan/simpan') ?>" method="post">
        <div class="container mt-4">
            <div class="text-center">
                <h5>PEMERINTAH KABUPATEN TANAH LAUT</h5>
                <h6>KECAMATAN BUMI MAKMUR</h6>
                <h6>DESA HANDIL SURUK</h6>
                <p>Alamat : Desa Handil Suruk RT. 03 RW. 02 Kec. Bumi Makmur Kab. Tala Kode Pos 70855</p>
                <hr>
                <h6><u>SURAT KETERANGAN KEHILANGAN</u></h6>
                <p>Nomor: <input type="text" name="no_surat" style="border:none; border-bottom:1px solid #000; width:250px;" required></p>
            </div>

            <p>Yang bertanda tangan di bawah ini Kepala Desa Handil Suruk Kecamatan Bumi Makmur Kabupaten Tanah Laut, menerangkan bahwa:</p>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                <select name="jenis_kelamin" class="form-select" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tempat_tanggal_lahir" class="form-label">Tempat/Tanggal Lahir <span class="text-danger">*</span></label>
                <div class="row g-2">
                    <div class="col-md-6">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="tanggal_lahir" class="form-control" placeholder="dd/mm/yyyy" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                <input type="text" name="nik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="agama" class="form-label">Agama <span class="text-danger">*</span></label>
                <input type="text" name="agama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                <textarea name="alamat" class="form-control" rows="2" required></textarea>
            </div>

            <div class="mb-3">
                <label for="dokumen" class="form-label">Dokumen yang Hilang <span class="text-danger">*</span></label>
                <select name="dokumen" class="form-select" required>
                    <option value="">-- Pilih Dokumen --</option>
                    <option value="KTP">KTP</option>
                    <option value="KK">Kartu Keluarga (KK)</option>
                    <option value="Ijazah">Ijazah</option>
                    <option value="KTM">Kartu Tanda Mahasiswa (KTM)</option>
                    <option value="Surat Nikah">Surat Nikah</option>
                    <option value="Akta Kelahiran">Akta Kelahiran</option>
                    <option value="SIM">SIM (Surat Izin Mengemudi)</option>
                    <option value="Kartu Vaksin COVID-19">Kartu Vaksin COVID-19</option>
                    <option value="NPWP">Kartu NPWP</option>
                    <option value="Kartu Pegawai">Kartu Pegawai/Identitas Kerja</option>
                    <option value="Buku Tabungan">Buku Tabungan</option>
                    <option value="Buku Nikah">Buku Nikah</option>
                    <option value="Sertifikat Rumah">Dokumen Tanah atau Sertifikat Rumah</option>
                    <option value="Kartu Pelajar">Kartu Pelajar</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_hilang" class="form-label">Terjadi pada <span class="text-danger">*</span></label>
                <input type="text" name="tanggal_hilang" class="form-control" placeholder="dd/mm/yyyy" required>
            </div>

            <div class="mb-3">
                <label for="lokasi_kejadian" class="form-label">Di sekitar <span class="text-danger">*</span></label>
                <input type="text" name="lokasi_kejadian" class="form-control" required>
            </div>

            <p>
                Surat keterangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.
            </p>

            <div class="text-end mt-5">
                <p>Dikeluarkan di Handil Suruk</p>
                <p>Pada Tanggal : <?= date('d F Y') ?></p>
                <p>Kepala Desa Handil Suruk</p>
                <br><br><br>
                <p><u>KHALIKUL BASIR</u></p>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('masyarakat/dashboard') ?>" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>
</main>

<?= $this->include('TemplatesMasyarakat/footer'); ?>