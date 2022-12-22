<?php

use App\Models\Cat;
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

Route::get('cats', function(){

    \App\Models\Cat::create(
        ['info' => json_encode(['nama' => 'Fluffy', 'long-hair' => true])]
    );

    \App\Models\Cat::create(
        ['info' => json_encode(['nama' => 'Furball', 'long-hair' => false])]
    );

    \App\Models\Cat::create(
        ['info' => json_encode(['nama' => 'Igor', 'long-hair' => true])]
    );
});