<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Surat Keterangan Ahli Waris</h1>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Surat Keterangan Ahli Waris</h5>

                        <form action="/masyarakat/ajukansurat/ahli-waris" method="post">
                            <?= csrf_field() ?>

                            <!-- Nomor Surat -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nomor Surat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_surat" value="">
                                </div>
                            </div>

                            <!-- Nama Almarhum -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Almarhum <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_almarhum" value="" required>
                                </div>
                            </div>

                            <!-- Hari, Tanggal Wafat -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Hari/Tanggal Meninggal <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="hari_tanggal_meninggal" value="" required>
                                </div>
                            </div>

                            <!-- Asal Surat Kematian -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Asal Surat Kematian <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="asal_surat_kematian" value="" required>
                                </div>
                            </div>

                            <!-- Nomor Surat Kematian -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nomor Surat Kematian <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_surat_kematian" value="" required>
                                </div>
                            </div>

                            <!-- Daftar Ahli Waris -->
                            <h6 class="mt-4">Data Ahli Waris:</h6>

                            <button type="button" class="btn btn-success mb-3" onclick="tambahWaris()">+ Tambah Ahli Waris</button>

                            <div class="table-responsive mb-4">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama <span class="text-danger">*</span></th>
                                            <th>NIK <span class="text-danger">*</span></th>
                                            <th>Tempat, Tanggal Lahir <span class="text-danger">*</span></th>
                                            <th>Alamat <span class="text-danger">*</span></th>
                                            <th>Hubungan <span class="text-danger">*</span></th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="warisTable">
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" class="form-control" name="nama[]" required></td>
                                            <td>
                                                <input type="text" class="form-control" name="nik[]" required
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                                    maxlength="16" placeholder="NIK hanya angka">
                                            </td>
                                            <td><input type="text" class="form-control" name="ttl[]" required></td>
                                            <td><input type="text" class="form-control" name="alamat[]" required></td>
                                            <td><input type="text" class="form-control" name="hubungan[]" required></td>
                                            <td><button type="button" class="btn btn-danger btn-sm" onclick="hapusWaris(this)">Hapus</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="row mb-3">
                                <div class="col-sm-9 offset-sm-3">
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

<!-- Script untuk tambah dan hapus baris waris -->
<script>
    function tambahWaris() {
        const table = document.getElementById('warisTable');
        const rowCount = table.rows.length;
        const row = table.insertRow();

        row.innerHTML = `
            <td>${rowCount + 1}</td>
            <td><input type="text" class="form-control" name="nama[]" required></td>
            <td>
                <input type="text" class="form-control" name="nik[]" required
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                       maxlength="16" placeholder="NIK hanya angka">
            </td>
            <td><input type="text" class="form-control" name="ttl[]" required></td>
            <td><input type="text" class="form-control" name="alamat[]" required></td>
            <td><input type="text" class="form-control" name="hubungan[]" required></td>
            <td><button type="button" class="btn btn-danger btn-sm" onclick="hapusWaris(this)">Hapus</button></td>
        `;
    }

    function hapusWaris(button) {
        const row = button.parentElement.parentElement;
        row.remove();
        // Perbarui nomor
        const rows = document.querySelectorAll('#warisTable tr');
        rows.forEach((tr, index) => {
            tr.cells[0].innerText = index + 1;
        });
    }
</script>

<?= $this->include('TemplatesMasyarakat/footer'); ?>