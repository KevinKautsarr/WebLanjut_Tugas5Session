<?php
//rute aplikasi
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/',  'Home::index');
//======== Tugas 3 ========
// /kategori = link permintaan dari user 
// diarahkan ke method  dalam file KategoriController. 
$routes->get('/kategori', 'KategoriController::index');
$routes->get('/kategori/v_alatTulis', 'KategoriController::alatTulis');
$routes->get('/kategori/v_pakaian', 'KategoriController::pakaian');
$routes->get('/kategori/v_pertukangan', 'KategoriController::pertukangan');
$routes->get('/kategori/v_elektronik', 'KategoriController::elektronik');
$routes->get('/kategori/v_snack', 'KategoriController::snack');
//======== Tugas 4 Layout ========
$routes->get('/',  'Tugas3Controller::home4');// home tugas
$routes->get('/produk',  'Tugas3Controller::produk');
//$routes->get('/login4',  'Tugas3Controller::login');
//======== Tugas 5 Session ========
$routes->get('login', 'AuthController::login'); //1. untuk menampilkan halaman login (form)
$routes->post('login', 'AuthController::login'); //2. untuk mengirim data user login
$routes->get('logout', 'AuthController::logout');//3. untuk mengakhiri sesi 
