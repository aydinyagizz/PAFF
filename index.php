<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Istanbul');



define('BASE_URL', 'http://localhost/PAFF/');

require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';
require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/helper.php';

Route::run('/', 'login@index');
Route::run('/giris', 'login@index');
Route::run('/oyuncu-kartlari','cards@index');
Route::run('/admin', 'admin@index');
Route::run('/video-detay', 'videoDetay@index');
Route::run('/video-detay/{url}', 'videoDetay@index','GET');
//Route::run('/detay', 'videoDetay@detay');
Route::run('/duyurular','duyuru@index');

//Route::run('/uyeler', 'uyeler@index');
//Route::run('/uyeler','uyeler@post','post');
//Route::run('/profil/sifre-degistir','profile/changepassword@index');
