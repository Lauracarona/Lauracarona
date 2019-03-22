<?php

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
Route::get('/welcome', function () {
echo "Welcome";
});

Route::get('/index', function () {
echo "Uji Coba route dengan method GET";
});

Route::post('/store', function () {
// sintak untuk menyimpan data
});

Route::put('/update', function () {
// sintak untuk upadte data
});

Route::get('/produk', 'produkController@index');
});
