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

Route::get('/', function () {
    echo "<h3> This is HomePage</h3>";
});

Route::get('/about', function () {
    echo "<h3> This is AboutPage</h3>";
});

Route::get('/contact', function ($name) {
    echo "<h3> This is ContacPage</h3>";
});

Route::get('/user',function (){
   return view('view', ['name' => 'Hoang Tu']);
});

Route::get ('/user/{name}', function ($name){
echo " Username is $name";
});

Route::get('/user-name/{name?}', function ($name = 'Hoang Tu')
{
    echo " Username is $name";
});

Route::get('/', 'App\Http\Controllers\HomeController@index');

