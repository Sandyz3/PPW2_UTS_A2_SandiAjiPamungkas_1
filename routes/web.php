<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelPemainController;
use App\Models\TabelPemain;

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

route::get('/', function () {
    return view('welcome');
});

route::get('index', [TabelPemainController::class, 'index']);
