<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//CREATE
$route['news/create'] = 'news/create'; //ke controller news, lalu menjalankan metode create

$route['news'] = 'news'; //memanggil controller news
$route['news/(:any)'] = 'news/view/$1';

$route['default_controller'] = 'halaman/view';
$route['(:any)'] = 'halaman/view/$1'; //(:any) berfungsi agar apapun yg user ketik bisa(fleksibel)
                                      //$1 untuk delarasi kalo kita akan memasukkan parameter disini

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
