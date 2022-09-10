<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;

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
    return view('dashboard');
});


route::get('/catatan', [CatatanController::class, 'index'])->name('catatan');
route::get('/dataperjalanan', [CatatanController::class, 'index'])->name('dataperjalanan');