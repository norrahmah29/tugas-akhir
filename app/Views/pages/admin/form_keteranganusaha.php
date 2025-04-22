<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1> Data Keterangan Usaha</h1>
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
                        <h5 class="card-title"> Data Keterangan Usaha</h5>

                        <form action="/tambah_keteranganusaha" method="post">
                            <?= csrf_field() ?>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">No. Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Pemohon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_pemohon">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nik">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" style="height: 100px"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="desa">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kecamatan">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kabupaten</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kabupaten">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Provinsi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="provinsi">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Jenis Usaha</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis_usaha">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tahun Mulai</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="tahun_mulai">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal_surat">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Kepala Desa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_kepala_desa">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/keteranganusaha" class="btn btn-secondary">Kembali</a>
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