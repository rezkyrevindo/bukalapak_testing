<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login']       		 = 'welcome/login';
$route['restoran']      	= 'restoran/index';
$route['pelanggan']			= 'pelanggan/index';
$route['makanan']			= 'makanan/index';
$route['pegawai']			= 'pegawai/index';
$route['order']				= 'order/index';

?>