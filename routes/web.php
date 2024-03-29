<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/', 'LoginController@index');

    Route::get('/logout', 'LogoutController@index');

    Route::post('/login', 'LoginController@login');

    Route::resource('/barangay', 'BarangayController');

    Route::resource('/purok', 'PurokController');

    Route::resource('/sickness-category', 'SicknessCategoryController');

    Route::resource('/illness', 'IllnessController');

    Route::resource('/resident', 'ResidentController');

    Route::resource('/resident-illness', 'ResidentIllnessController');



