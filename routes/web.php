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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main/{aaa}/bbb/{ccc?}', 'IndexController@main');

Route::get('/time', function () {
    return 'Welcome to CornHub!!';
})->middleware('timeIn');

//20200103課後練習
Route::get('/base/{Decimal}/{Base?}', 'BaseController@main');

Route::get('/jsondecodetest', 'TestController@main');

Route::get('/adxUrl', 'TransferADXToAws@index');
Route::post('/uploadtoaws', 'TransferADXToAws@upload')->name('upload');
Route::get('/dynamodb', 'DmpOneadMap@index');

Route::get('/cm-tes', 'cmmtest@index');

// Route::get('/easyUpdate', 'S3testV2@index');

// Route::post('upload', function (){
// dd(123);
// })-> $name('upload');
