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


Route::get('/voyages', function () {
    return view('voyages');
})->name('voyages');

Route::get('/hotels', function () {
    return view('hotels');
})->name('hotels');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/', function () {
    return view('index');
})->name('show');


Route::get('show}', function () {
    return view('show');
})->name('showVoyage');

Route::get('voyages/{id_voyage}', function ($id_voyage) {
    return view('show',['id_voyage'=>$id]);
})->name('showVoyages');

Route::get('a_propos', function () {
    echo 'Ceci est la page qui affichera les
    informations concernant l’entreprise';
});

Route::get('admin/voyages', function () {
    echo 'Ceci est la page voyages de la console
    d’administration';
});

Route::get('admin/users', function () {
    echo 'Ceci est la page users de la console
    d’administration';
});



Route::resource('voyages', 'VoyagesController');

Route::apiResource('voyages', 'VoyagesController');

Route::get('/admin', 'VoyagesController@displayTable')->name('admin');

Route::get('/edit/{id}', 'VoyagesController@editvoyage')->name('edit');

Route::get('/admin/{id}', 'VoyagesController@destroy')->name('destroy');

Route::put('/admin/{id}', 'VoyagesController@update1')->name('change');

Route::get('/create', function () {
    return view('create');
})->name('create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
