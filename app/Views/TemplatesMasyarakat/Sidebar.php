<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('masyarakat/dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Dropdown Surat Masuk -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('masyarakat/ajukansurat'); ?>">
                <i class="bi bi-envelope-arrow-up"></i>
                <span>Ajukan Surat</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('masyarakat/arsip'); ?>">
                <i class="bi bi-envelope-arrow-up"></i>
                <span>Arsip Surat</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#surat-masuk-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-circle"></i>
                <span>Akun</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#surat-masuk-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>
</aside>