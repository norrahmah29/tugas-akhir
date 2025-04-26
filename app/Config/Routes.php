<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Set default controller ke Dashboard
$routes->setDefaultController('Dashboard');
// $routes->get('/', 'Dashboard::index'); // Tambahkan route untuk halaman utama

// Route untuk halaman dashboard
$routes->get('/dashboard', 'Dashboard::index');


// Route untuk surat domisili
$routes->get('/', 'SuratDomisili::index');
$routes->get('/suratdomisili', 'SuratDomisili::index');
$routes->get('/admin/tabel_suratdomisili', 'SuratDomisili::index');
$routes->get('/form_suratdomisili', 'SuratDomisili::form_suratdomisili');
$routes->post('/tambah_suratdomisili', 'SuratDomisili::tambah_suratdomisili');
$routes->get('/edit_suratdomisili/(:num)', 'SuratDomisili::edit_suratdomisili/$1');
$routes->post('/update_suratdomisili/(:num)', 'SuratDomisili::update_suratdomisili/$1'); // Perbaikan rute POST
$routes->get('/delete_domisili/(:num)', 'SuratDomisili::delete_domisili/$1');
//$routes->post('/cetak_perizinan_pdf', 'Perizinan::cetak_perizinan_pdf');


// Route untuk surat kehilangan
//$routes->get('/', 'SuratKeteranganHilang::index');
$routes->get('/admin/tabel_keteranganhilang', 'SuratKeteranganHilang::index');
$routes->get('/suratketeranganhilang', 'SuratKeteranganHilang::index');
$routes->get('/form_suratkehilangan', 'SuratKeteranganHilang::form_suratkehilangan');
$routes->post('/tambah_suratkehilangan', 'SuratKeteranganHilang::tambah_suratkehilangan');
$routes->get('/edit_suratkehilangan/(:num)', 'SuratKeteranganHilang::edit_suratkehilangan/$1');
$routes->post('/update_suratkehilangan/(:num)', 'SuratKeteranganHilang::update_suratkehilangan/$1');
$routes->get('/delete_suratkehilangan/(:num)', 'SuratKeteranganHilang::delete_suratkehilangan/$1');

// Route untuk surat keterangan usaha
//$routes->get('/admin/tabel_keteranganusaha', 'SuratKeteranganUsaha::index');
//$routes->get('/keteranganusaha', 'SuratKeteranganUsaha::index');
//$routes->get('/form_keteranganusaha', 'SuratKeteranganUsaha::form_keteranganusaha');
//$routes->post('/tambah_keteranganusaha', 'SuratKeteranganUsaha::tambah_keteranganusaha');
//$routes->get('/edit_keteranganusaha/(:num)', 'SuratKeteranganUsaha::edit_keteranganusaha/$1');
//$routes->post('/update_keteranganusaha/(:num)', 'SuratKeteranganUsaha::update_keteranganusaha/$1');
//$routes->get('/delete_keteranganusaha/(:num)', 'SuratKeteranganUsaha::delete_keteranganusaha/$1');




// Route untuk surat ahli waris
$routes->get('admin/tabel_ahliwaris', 'SuratAhliWaris::index');

// Route untuk surat tidak mampu
//$routes->get('/surattidakmampu', 'SuratTidakMampu::index');
//$routes->get('/surattidakmampu/form_tidak_mampu', 'SuratTidakMampu::form_tidak_mampu');
//$routes->post('/surattidakmampu/simpan', 'SuratTidakMampu::simpan');
//$routes->get('/surattidakmampu/edit/(:num)', 'SuratTidakMampu::edit/$1');
//$routes->post('/surattidakmampu/update/(:num)', 'SuratTidakMampu::update/$1');
//$routes->get('/surattidakmampu/delete/(:num)', 'SuratTidakMampu::delete/$1');



// Route untuk surat suami istri
$routes->get('/suamiistri', 'SuratSuamiIstri::index');
$routes->get('/suamiistri/form', 'SuratSuamiIstri::create');
$routes->post('/suamiistri/store', 'SuratSuamiIstri::store');
$routes->get('/suamiistri/edit/(:num)', 'SuratSuamiIstri::edit/$1');
$routes->post('/suamiistri/update/(:num)', 'SuratSuamiIstri::update/$1');
$routes->get('/suamiistri/delete/(:num)', 'SuratSuamiIstri::delete/$1');





//$routes->get('/keteranganhilang/delete/(:num)', 'KeteranganHilang::delete/$1');

// Rute untuk autentikasi (jika diperlukan di masa depan)
// $routes->get('/login', 'Auth::login');
// $routes->post('/login-proses', 'Auth::login_proses');
// $routes->get('/logout', 'Auth::logout');


//MASYARAKAT
$routes->get('masyarakat/dashboard', 'Masyarakat\DashboardMasyarakat::index');
$routes->get('masyarakat/ajukansurat', 'Masyarakat\AjukanSurat::index');

// surat domisili tani
$routes->get('masyarakat/ajukansurat/suratdomisili', 'Masyarakat\SuratDomisili::index');
$routes->post('masyarakat/ajukansurat/suratdomisili/generatesurat', 'Masyarakat\SuratDomisili::generateSurat');
$routes->post('masyarakat/ajukansurat/suratdomisili/simpan', 'Masyarakat\SuratDomisili::simpan');

// surat domisili Bangunan
$routes->get('masyarakat/ajukansurat/suratdomisilibangunan', 'Masyarakat\SuratDomisiliBangunan::index');
$routes->post('masyarakat/ajukansurat/suratdomisilibangunan/generatesurat', 'Masyarakat\SuratDomisiliBangunan::generateSurat');
$routes->post('masyarakat/ajukansurat/suratdomisilibangunan/simpan', 'Masyarakat\SuratDomisiliBangunan::simpan');

// surat domisili warga
$routes->get('masyarakat/ajukansurat/suratdomisiliwarga', 'Masyarakat\SuratDomisiliWarga::index');
$routes->post('masyarakat/ajukansurat/suratdomisiliwarga/generatesurat', 'Masyarakat\SuratDomisiliWarga::generateSurat');
$routes->post('masyarakat/ajukansurat/suratdomisiliwarga/simpan', 'Masyarakat\SuratDomisiliWarga::simpan');

// surat belum bekerja 
$routes->get('masyarakat/ajukansurat/suratbelumbekerja', 'Masyarakat\SuratBelumBekerja::index');
$routes->post('masyarakat/ajukansurat/suratbelumbekerja/generatesurat', 'Masyarakat\SuratBelumBekerja::generateSurat');
$routes->post('masyarakat/ajukansurat/suratbelumbekerja/simpan', 'Masyarakat\SuratBelumBekerja::simpan');

// surat keterangan kelahiran
$routes->get('masyarakat/ajukansurat/suratkelahiran', 'Masyarakat\SuratKelahiran::index');
$routes->post('masyarakat/ajukansurat/suratkelahiran/generatesurat', 'Masyarakat\SuratKelahiran::generateSurat');
$routes->post('masyarakat/ajukansurat/suratkelahiran/simpan', 'Masyarakat\SuratKelahiran::simpan');

// surat keterangan kematian
$routes->get('masyarakat/ajukansurat/suratketerangankematian', 'Masyarakat\SuratKeteranganKematian::index');
$routes->post('masyarakat/ajukansurat/keterangankematian/generatesurat', 'Masyarakat\SuratKeteranganKematian::generateSurat');
$routes->post('masyarakat/ajukansurat/suratketerangankematian/simpan', 'Masyarakat\SuratKeteranganKematian::simpan');

// surat tidak mampu
$routes->get('masyarakat/ajukansurat/surattidakmampu', 'Masyarakat\SuratTidakMampu::index');
$routes->post('masyarakat/ajukansurat/surattidakmampu/generatesurat', 'Masyarakat\SuratTidakMampu::generateSurat');
$routes->post('masyarakat/ajukansurat/surattidakmampu/simpan', 'Masyarakat\SuratTidakMampu::simpan');


// surat keterangan usaha
$routes->get('masyarakat/ajukansurat/suratusaha', 'Masyarakat\SuratUsaha::index');
$routes->post('masyarakat/ajukansurat/suratusaha/generatesurat', 'Masyarakat\SuratUsaha::generateSurat');
$routes->post('masyarakat/ajukansurat/suratusaha/simpan', 'Masyarakat\SuratUsaha::simpan');


// surat skck
$routes->get('masyarakat/ajukansurat/suratpengantarskck', 'Masyarakat\SuratPengantarSKCK::index');
$routes->post('masyarakat/ajukansurat/suratpengantarskck/generatesurat', 'Masyarakat\SuratPengantarSKCK::generateSurat');
$routes->post('masyarakat/ajukansurat/suratpengantarskck/simpan', 'Masyarakat\SuratPengantarSKCK::simpan');

// surat keterangan janda
$routes->get('masyarakat/ajukansurat/suratketeranganjanda', 'Masyarakat\SuratKeteranganJanda::index');
$routes->post('masyarakat/ajukansurat/suratketeranganjanda/generatesurat', 'Masyarakat\SuratKeteranganJanda::generateSurat');
$routes->post('masyarakat/ajukansurat/suratketeranganjanda/simpan', 'Masyarakat\SuratKeteranganJanda::simpan');

// surat pindah
$routes->get('masyarakat/ajukansurat/suratpindah', 'Masyarakat\SuratPindah::index');
$routes->post('masyarakat/ajukansurat/suratpindah/generatesurat', 'Masyarakat\SuratPindah::generateSurat');
$routes->post('masyarakat/ajukansurat/suratpindah/simpan', 'Masyarakat\SuratPindah::simpan');



// Surat kehilangan
$routes->get('masyarakat/ajukansurat/suratkehilangan', 'Masyarakat\SuratKehilangan::index');

// surat keterangansuamiistri
$routes->get('masyarakat/ajukansurat/suratsuamiistri', 'Masyarakat\SuratSuamiIstri::index');
$routes->post('masyarakat/ajukansurat/suratsuamiistri/generatesurat', 'Masyarakat\SuratSuamiIstri::generateSurat');
$routes->post('masyarakat/ajukansurat/suratsuamiistri/simpan', 'Masyarakat\SuratSuamiIstri::simpan');



// surat ahli waris
$routes->get('masyarakat/ajukansurat/suratahliwaris', 'Masyarakat\SuratWaris::index');

// surat tidak mampu
$routes->get('masyarakat/ajukansurat/suratketerangantidakmampu', 'Masyarakat\SuratTidakMampu::index');

// surat pengantar
$routes->get('masyarakat/ajukansurat/suratpengantar', 'Masyarakat\SuratPengantar::index');


// arsip surat masyarakat
$routes->get('masyarakat/arsip', 'Masyarakat\Arsip::index');
