<?= $this->include('Templates/header'); ?>
<?= $this->include('Templates/navbar'); ?>
<?= $this->include('Templates/sidebar'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Domisili</h1>
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
                        <h5 class="card-title">Data Domisili</h5>

                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>

                        <a href="<?= base_url('form_suratdomisili') ?>">
                            <button class="btn btn-primary">Tambah</button>
                        </a>
                        <p></p>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. Surat</th>
                                    <th>Nama Gapoktan</th>
                                    <th>Tanggal Pembentukan</th>
                                    <th>Alamat</th>
                                    <th>Ketua</th>
                                    <th>Sekretaris</th>
                                    <th>Bendahara</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1; // Inisialisasi nomor urut
                                foreach ($surat_domisili as $data) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td> <!-- Menampilkan nomor urut -->
                                        <td><?= esc($data['no_surat']); ?></td>
                                        <td><?= esc($data['nama_gapoktan']); ?></td>
                                        <td><?= esc($data['tgl_pembentukan']); ?></td>
                                        <td><?= esc($data['alamat']); ?></td>
                                        <td><?= esc($data['ketua']); ?></td>
                                        <td><?= esc($data['sekretaris']); ?></td>
                                        <td><?= esc($data['bendahara']); ?></td>
                                        <td>

                                            <a href="<?= base_url('edit_suratdomisili/' . $data['id_suratdomisili']) ?>" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="<?= base_url('delete_domisili/' . $data['id_suratdomisili']) ?>" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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