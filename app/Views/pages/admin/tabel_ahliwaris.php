<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Ahli Waris</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Data Ahli Waris</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Ahli Waris</h5>
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?= base_url('form_ahliwaris') ?>"><button class="btn btn-primary">Tambah</button></a>
                        <p></p>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No. Surat</th>
                                    <th>Nama Ahli Waris</th>
                                    <th>NIK Ahli Waris</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Pekerjaan</th>
                                    <th>Nama Meninggal</th>
                                    <th>Tanggal Meninggal</th>
                                    <th>Tanggal Terakhir Hidup</th>
                                    <th>Hubungan</th>
                                    <th>Tanggal Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ahliwaris as $data) : ?>
                                    <tr>
                                        <td><?= esc($data['no_surat']); ?></td>
                                        <td><?= esc($data['nama_waris']); ?></td>
                                        <td><?= esc($data['nik_waris']); ?></td>
                                        <td><?= esc($data['tgl_lahir_waris']); ?></td>
                                        <td><?= esc($data['alamat_waris']); ?></td>
                                        <td><?= esc($data['pekerjaan_waris']); ?></td>
                                        <td><?= esc($data['nama_meninggal']); ?></td>
                                        <td><?= esc($data['tgl_meninggal']); ?></td>
                                        <td><?= esc($data['tgl_terakhir_hidup']); ?></td>
                                        <td><?= esc($data['hubungan']); ?></td>
                                        <td><?= esc($data['tgl_surat']); ?></td>
                                        <td>
                                            <a href="<?= base_url('edit_ahliwaris/' . $data['id_ahliwaris']) ?>" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <a href="<?= base_url('ahliwaris/detail_ahliwaris/' . $data['id_ahliwaris']) ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail">
                                                <i class="bi bi-info-circle"></i>
                                            </a>

                                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('ahliwaris/hapus_ahliwaris/' . $data['id_ahliwaris']) ?>" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
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