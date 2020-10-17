<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$abc = 123456;

Route::get('/', function () {
    // check phpinfo here
    // phpinfo();
    $a = 123;
    $b = 456;
    $c = $a + $b;
    echo $c;
});
