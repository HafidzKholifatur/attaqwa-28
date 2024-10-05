<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/profil', 'Profil::index');

$routes->get('/kegiatan', 'Kegiatan::index');
$routes->get('/kegiatan/(:any)', 'Kegiatan::detail/$1');
// $routes->get('/kegiatan/konten', 'Kegiatan::konten');

$routes->get('/galeri', 'Galeri::index');

// $routes->get('/kontak', 'KontakController::index');
// $routes->post('/kontak/send', 'KontakController::index');
// $routes->post('kontak/send', 'KontakController::index');

$routes->get('/kontak', 'ContactController::index');
$routes->post('/kontak/send', 'ContactController::send');


$routes->get('/tentang', 'Pages::tentang');

// Login & Logout Auth Routes
// $routes->get('/login', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->post('/auth', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Dashboard Admin Routes
$routes->get('/admin', 'Dashboard::index');

// User Management Routes
$routes->get('/admin/user', 'UserController::index');
$routes->get('/admin/user/create', 'UserController::create');
$routes->post('/admin/user/store', 'UserController::store');
$routes->get('/admin/user/edit/(:segment)', 'UserController::edit/$1');
$routes->post('/admin/user/update/(:segment)', 'UserController::update/$1');
$routes->get('/admin/user/delete/(:segment)', 'UserController::delete/$1');

// Profile User Update (Session id)
$routes->get('/admin/user/profile', 'UserController::profile');
$routes->post('/admin/user/updateProfile', 'UserController::updateProfile');
 
// Gallery Management Routes
$routes->get('/admin/gallery', 'GalleryController::index');
$routes->get('/admin/gallery/create', 'GalleryController::create');
$routes->post('/admin/gallery/store', 'GalleryController::store');
$routes->get('/admin/gallery/edit/(:segment)', 'GalleryController::edit/$1');
$routes->post('/admin/gallery/update/(:segment)', 'GalleryController::update/$1');
$routes->get('/admin/gallery/delete/(:segment)', 'GalleryController::delete/$1');

// Berita Management Routes
$routes->get('/admin/berita', 'BeritaController::index');
$routes->get('/admin/berita/published', 'BeritaController::published');
$routes->get('/admin/berita/draft', 'BeritaController::draft');
$routes->get('/admin/berita/create', 'BeritaController::create');
$routes->post('/admin/berita/store', 'BeritaController::store');
$routes->get('/admin/berita/edit/(:num)', 'BeritaController::edit/$1');
$routes->post('/admin/berita/update/(:num)', 'BeritaController::update/$1');
$routes->delete('/admin/berita/delete/(:num)', 'BeritaController::delete/$1');

$routes->post('/admin/berita/upload-image', 'BeritaController::uploadImage');
$routes->post('/admin/berita/delete-image', 'BeritaController::deleteImage');


$routes->get('/admin/settings', 'SettingsController::index');
$routes->post('/admin/settings/update', 'SettingsController::update');

$routes->get('/admin/berita/statistics', 'BeritaController::statistics');
$routes->get('/admin/berita/getMonthlyStatistics', 'BeritaController::getMonthlyStatistics');

$routes->get('/admin/pesan', 'ContactController::table');


// $routes->group('admin', ['filter' => 'admin'], function($routes) {
//     // Halaman dashboard admin
//     $routes->get('/admin', 'Dashboard::index');
    
//     // Halaman pengaturan admin
//     $routes->get('pengaturan', 'Dashboard::setting');
// });


$routes->get('/db', 'Home::db');

// $routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']);

