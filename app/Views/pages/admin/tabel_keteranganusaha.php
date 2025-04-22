<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Keterangan Usaha</h1>
        <nav>
            <ol class="breadcrumb">
                <!-- Breadcrumb bisa ditambahkan jika diperlukan -->
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Keterangan Usaha</h5>

                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>

                        <a href="<?= base_url('form_keteranganusaha') ?>" class="btn btn-primary mb-3">Tambah</a>

                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th> <!-- Kolom Nomor Urut -->
                                        <th>No. Surat</th>
                                        <th>Nama Pemohon</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>Desa</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Jenis Usaha</th>
                                        <th>Tahun Mulai</th>
                                        <th>Tanggal Surat</th>
                                        <th>Nama Kepala Desa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1; // Inisialisasi nomor urut
                                    foreach ($surat_keteranganusaha as $data) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td> <!-- Menampilkan nomor urut -->
                                            <td><?= esc($data['no_surat']); ?></td>
                                            <td><?= esc($data['nama_pemohon']); ?></td>
                                            <td><?= esc($data['nik']); ?></td>
                                            <td><?= esc($data['alamat']); ?></td>
                                            <td><?= esc($data['desa']); ?></td>
                                            <td><?= esc($data['kecamatan']); ?></td>
                                            <td><?= esc($data['kabupaten']); ?></td>
                                            <td><?= esc($data['provinsi']); ?></td>
                                            <td><?= esc($data['jenis_usaha']); ?></td>
                                            <td><?= esc($data['tahun_mulai']); ?></td>
                                            <td><?= esc($data['tanggal_surat']); ?></td>
                                            <td><?= esc($data['nama_kepala_desa']); ?></td>
                                            <td>
                                                <a href="<?= base_url('edit_keteranganusaha/' . $data['id_suratketeranganusaha']) ?>" class="btn btn-secondary btn-sm" title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('delete_keteranganusaha/' . $data['id_suratketeranganusaha']) ?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
        </div>
    </section>
</main>

<?= $this->include('Templates/footer'); ?>