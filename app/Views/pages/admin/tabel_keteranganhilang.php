<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Surat Keterangan Hilang</h1>
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
                        <h5 class="card-title">Data Surat Keterangan Hilang</h5>

                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>

                        <a href="/form_suratkehilangan" class="btn btn-primary">Tambah</a>
                        <p></p>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. Surat</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>NIK</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Hilang</th>
                                    <th>Lokasi Hilang</th>
                                    <th>Keperluan</th>
                                    <th>Tanggal Surat</th>
                                    <th>Nama Kepala Desa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($surat_kehilangan as $data) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= esc($data['no_surat']); ?></td>
                                        <td><?= esc($data['nama']); ?></td>
                                        <td><?= esc($data['jenis_kelamin']); ?></td>
                                        <td><?= esc($data['tempat_lahir']); ?></td>
                                        <td><?= esc($data['tanggal_lahir']); ?></td>
                                        <td><?= esc($data['nik']); ?></td>
                                        <td><?= esc($data['agama']); ?></td>
                                        <td><?= esc($data['alamat']); ?></td>
                                        <td><?= esc($data['tanggal_hilang']); ?></td>
                                        <td><?= esc($data['lokasi_hilang']); ?></td>
                                        <td><?= esc($data['keperluan']); ?></td>
                                        <td><?= esc($data['tanggal_surat']); ?></td>
                                        <td><?= esc($data['nama_kepala_desa']); ?></td>
                                        <td>

                                            <a href="<?= base_url('edit_suratkehilangan/' . $data['id_suratketeranganhilang']) ?>" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="<?= base_url('suratkehilangan/detail/' . $data['id_suratketeranganhilang']) ?>" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Detail">
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                            <a href="<?= base_url('delete_suratkehilangan/' . $data['id_suratketeranganhilang']) ?>" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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