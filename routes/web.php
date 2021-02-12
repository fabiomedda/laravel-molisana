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
    return view('home');
})->name('home');

Route::get('prodotti', function () {

    $pasta = config('dati.pasta');

    $pasta_lunga = array_filter($pasta, function ($pasta) {
        return $pasta["tipo"] == "lunga";
    });

    $pasta_corta = array_filter($pasta, function ($pasta) {
        return $pasta["tipo"] == "corta";
    });

    $pasta_cortissima = array_filter($pasta, function ($pasta) {
        return $pasta["tipo"] == "cortissima";
    });

    return view('prodotti', compact("pasta_lunga", "pasta_corta", "pasta_cortissima"));
})->name('prodotti');

Route::get('prodotto/{id}', function ($id) {
    $pasta = config('dati.pasta');
    return view('prodotto', compact('id', 'pasta'));
})->name('prodotto');

Route::get('contatti', function () {
    return view('contatti');
})->name('contatti');