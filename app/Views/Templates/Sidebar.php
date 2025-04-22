<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Dropdown Surat Masuk -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#surat-masuk-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-envelope-arrow-up"></i>
                <span>Surat Masuk</span> <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="surat-masuk-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('surat_masuk'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Undangan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('surat_disposisi'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Disposisi</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Dropdown Surat Masuk -->

        <!-- Dropdown Surat Keluar -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#surat-keluar-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-envelope-arrow-up"></i>
                <span>Surat Keluar</span> <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="surat-keluar-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('admin/tabel_suratdomisili'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Domisili</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/tabel_keteranganhilang'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Keterangan Hilang</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/surat_keterangansuamiistri'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Keterangan Suami Istri</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/surat_keterangantidakmampu'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Keterangan Tidak Mampu</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/tabel_keteranganusaha'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Keterangan Usaha</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/surat_pengantar'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Pengantar</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/surat_ahliwaris'); ?>">
                        <i class="bi bi-envelope-arrow-up"></i><span>Surat Pernyataan Ahli Waris</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Dropdown Surat Keluar -->

        <!-- Akun -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('akun'); ?>">
                <i class="bi bi-person-circle"></i>
                <span>Akun</span>
            </a>
        </li>

        <!-- Logout -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>