<?= $this->include('TemplatesMasyarakat/header'); ?>
<?= $this->include('TemplatesMasyarakat/navbar'); ?>
<?= $this->include('TemplatesMasyarakat/sidebar'); ?>

<main id="main" class="main">
    <form action="<?= base_url('masyarakat/ajukansurat/suratsuamiistri/simpan') ?>" method="post">
        <div class="container mt-4">
            <div class="text-center">
                <h5>PEMERINTAH KABUPATEN TANAH LAUT</h5>
                <h6>KECAMATAN BUMI MAKMUR</h6>
                <h6>DESA HANDIL SURUK</h6>
                <p>Alamat : Desa Handil Suruk RT. 03 RW. 02 Kec. Bumi Makmur Kab. Tala Kode Pos 70855</p>
                <hr>
                <h6><u>SURAT KETERANGAN SUAMI ISTRI</u></h6>
                <p>Nomor: 400.12.2.2/86/HandilSuruk/2024</p>
            </div>

            <p>Yang bertanda tangan di bawah ini Kepala Desa Handil Suruk Kecamatan Bumi Makmur Kabupaten Tanah Laut, dengan ini menerangkan bahwa :</p>

            <h6>DATA SUAMI</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="200px">Nama</td>
                    <td>: <?= $suami_nama ?></td>
                    <input type="hidden" name="suami_nama" value="<?= $suami_nama ?>">
                </tr>
                <tr>
                    <td>Tempat/Tgl Lahir</td>
                    <td>: <?= $suami_ttl ?></td>
                    <input type="hidden" name="suami_ttl" value="<?= $suami_ttl ?>">
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: <?= $suami_agama ?></td>
                    <input type="hidden" name="suami_agama" value="<?= $suami_agama ?>">
                </tr>
                <tr>
                    <td>Status Sebelum Menikah</td>
                    <td>: <?= $suami_status ?></td>
                    <input type="hidden" name="suami_status" value="<?= $suami_status ?>">
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?= $suami_alamat ?></td>
                    <input type="hidden" name="suami_alamat" value="<?= $suami_alamat ?>">
                </tr>
            </table>

            <h6>DATA ISTRI</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="200px">Nama</td>
                    <td>: <?= $istri_nama ?></td>
                    <input type="hidden" name="istri_nama" value="<?= $istri_nama ?>">
                </tr>
                <tr>
                    <td>Tempat/Tgl Lahir</td>
                    <td>: <?= $istri_ttl ?></td>
                    <input type="hidden" name="istri_ttl" value="<?= $istri_ttl ?>">
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>: <?= $istri_agama ?></td>
                    <input type="hidden" name="istri_agama" value="<?= $istri_agama ?>">
                </tr>
                <tr>
                    <td>Status Sebelum Menikah</td>
                    <td>: <?= $istri_status ?></td>
                    <input type="hidden" name="istri_status" value="<?= $istri_status ?>">
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?= $istri_alamat ?></td>
                    <input type="hidden" name="istri_alamat" value="<?= $istri_alamat ?>">
                </tr>
            </table>

            <h6>DATA PERNIKAHAN</h6>
            <table class="table table-borderless">
                <tr>
                    <td width="200px">Hari Pernikahan</td>
                    <td>: <?= $hari_nikah ?></td>
                    <input type="hidden" name="hari_nikah" value="<?= $hari_nikah ?>">
                </tr>
                <tr>
                    <td>Tanggal Pernikahan</td>
                    <td>: <?= $tanggal_nikah ?></td>
                    <input type="hidden" name="tanggal_nikah" value="<?= $tanggal_nikah ?>">
                </tr>
                <tr>
                    <td>Tempat Akad Nikah</td>
                    <td>: <?= $tempat_akad ?></td>
                    <input type="hidden" name="tempat_akad" value="<?= $tempat_akad ?>">
                </tr>
                <tr>
                    <td>Wali Nikah</td>
                    <td>: <?= $wali_nikah ?></td>
                    <input type="hidden" name="wali_nikah" value="<?= $wali_nikah ?>">
                </tr>
                <tr>
                    <td>Mahar</td>
                    <td>: <?= $mahar ?></td>
                    <input type="hidden" name="mahar" value="<?= $mahar ?>">
                </tr>
                <tr>
                    <td>Saksi Nikah</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="ps-4">Nama Saksi Pertama</td>
                    <td>: <?= $saksi_1 ?></td>
                    <input type="hidden" name="saksi_1" value="<?= $saksi_1 ?>">
                </tr>
                <tr>
                    <td class="ps-4">Nama Saksi Kedua</td>
                    <td>: <?= $saksi_2 ?></td>
                    <input type="hidden" name="saksi_2" value="<?= $saksi_2 ?>">
                </tr>
                <tr>
                    <td>Nama Anak</td>
                    <td>: <?= $nama_anak ?></td>
                    <input type="hidden" name="nama_anak" value="<?= $nama_anak ?>">
                </tr>
            </table>

            <p>
                Demikian surat keterangan ini dibuat dengan sebenarnya agar dapat digunakan sebagaimana mestinya.
            </p>

            <div class="text-end mt-5">
                <p>Dikeluarkan di Handil Suruk</p>
                <p>Pada Tanggal : <?= date('d F Y') ?></p>
                <p>Kepala Desa Handil Suruk</p>
                <br><br><br>
                <p><u>KHALIKUL BASIR</u></p>
            </div>

            <div class="mt-3">
                <button type="submit" name="action" value="simpan" class="btn btn-success">Simpan</button>
                <a href="<?= base_url('masyarakat/ajukansurat/') ?>" class="btn btn-danger">Batal</a>
                <button type="submit" name="action" value="download" class="btn btn-primary">Download</button>
            </div>
        </div>
    </form>
</main>

<?= $this->include('TemplatesMasyarakat/footer'); ?>