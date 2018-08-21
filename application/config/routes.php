<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//CREATE, $route['news/create'] untuk deklarasi agar halaman news/create aktif
$route['news/create'] = 'news/create'; //ke controller news, lalu menjalankan metode create

//UPDATE (:any) akan berisi id karena mengupdate membutuhkan parameter update
$route['news/update/(:any)'] = 'news/update/$1';

//DELETE
$route['news/delete/(:any)'] = 'news/delete/$1';

$route['news'] = 'news'; //memanggil controller news
$route['news/(:any)'] = 'news/view/$1';

$route['default_controller'] = 'halaman/view';
$route['(:any)'] = 'halaman/view/$1'; //(:any) berfungsi agar apapun yg user ketik bisa(fleksibel)
                                      //$1 untuk delarasi kalo kita akan memasukkan parameter disini

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
