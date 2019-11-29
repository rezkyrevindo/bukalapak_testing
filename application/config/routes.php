<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login']       		= 'welcome/login';
$route['restoran']      	= 'restoran/index';
$route['pelanggan']			= 'pelanggan/index';
$route['makanan']			= 'makanan/index';
$route['pegawai']			= 'pegawai/index';
$route['order']				= 'order/index';
$route['detail_product']	= 'detail_product/index';
$route['list_product']      = 'list_product/index';
$route['add_product']       = 'add_product/index';
$route['edit_product']      = 'edit_product/index';


?>