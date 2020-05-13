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
    return view('welcome');
});

Route::get('/', function () {
    $intros = App\HomepageIntro::all();
    $slides = App\HomepageSlide::all();
    $services = App\HomepageService::all();
    return view('welcome', compact('intros', 'slides', 'services'));
});

Route::get('/about', function () {
    $about = App\AboutU::all();
    return view('about', compact('about'));
});

Route::get('/rates', function () {
    return view('rates');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
