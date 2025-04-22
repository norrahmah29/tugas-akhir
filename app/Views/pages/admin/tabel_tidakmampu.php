<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Keterangan Tidak Mampu</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                <li class="breadcrumb-item active">Data Keterangan Tidak Mampu</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Keterangan Tidak Mampu</h5>
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?= base_url('form_tidakmampu') ?>"><button class="btn btn-primary">Tambah</button></a>
                        <p></p>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No. Surat</th>
                                    <th>Nama Pemohon</th>
                                    <th>NIK</th>
                                    <th>Alamat</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Provinsi</th>
                                    <th>Alasan</th>
                                    <th>Tanggal Surat</th>
                                    <th>Nama Kepala Desa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($surat_tidakmampu as $data) : ?>
                                    <tr>
                                        <td><?= esc($data['no_surat']); ?></td>
                                        <td><?= esc($data['nama_pemohon']); ?></td>
                                        <td><?= esc($data['nik']); ?></td>
                                        <td><?= esc($data['alamat']); ?></td>
                                        <td><?= esc($data['desa']); ?></td>
                                        <td><?= esc($data['kecamatan']); ?></td>
                                        <td><?= esc($data['kabupaten']); ?></td>
                                        <td><?= esc($data['provinsi']); ?></td>
                                        <td><?= esc($data['alasan']); ?></td>
                                        <td><?= esc($data['tanggal_surat']); ?></td>
                                        <td><?= esc($data['nama_kepala_desa']); ?></td>
                                        <td>
                                            <a href="<?= base_url('edit_tidakmampu/' . $data['id_surattidakmampu']) ?>" class="btn btn-secondary" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('delete_tidakmampu/' . $data['id_surattidakmampu']) ?>" class="btn btn-danger" title="Hapus">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->include('Templates/footer'); ?>