<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routes untuk entitas pasien
$route['pasien'] = 'pasien';
$route['pasien/create'] = 'pasien/create';
$route['pasien/read/(:num)'] = 'pasien/read/$1';
$route['pasien/update/(:num)'] = 'pasien/update/$1';
$route['pasien/delete/(:num)'] = 'pasien/delete/$1';

// Routes untuk entitas kunjungan
$route['kunjungan'] = 'kunjungan';
$route['kunjungan/create'] = 'kunjungan/create';
$route['kunjungan/read/(:num)'] = 'kunjungan/read/$1';
$route['kunjungan/update/(:num)'] = 'kunjungan/update/$1';
$route['kunjungan/delete/(:num)'] = 'kunjungan/delete/$1';

// Routes untuk entitas obat
$route['obat'] = 'obat';
$route['obat/create'] = 'obat/create';
$route['obat/read/(:num)'] = 'obat/read/$1';
$route['obat/update/(:num)'] = 'obat/update/$1';
$route['obat/delete/(:num)'] = 'obat/delete/$1';