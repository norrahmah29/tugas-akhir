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
                        <h5 class="card-title">Surat Keterangan Domisili</h5>

                        <form action="/masyarakat/ajukansurat/suratdomisili/generatesurat" method="post">
                            <?= csrf_field() ?>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nomor Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="no_surat">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Gapoktan <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_gapoktan" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tanggal Pembentukan <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_pembentukan" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat Sekretariat <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" style="height: 100px" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Ketua <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ketua" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Sekretaris <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="sekretaris" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Bendahara <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bendahara" required>
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