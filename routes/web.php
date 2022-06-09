<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ MahasiswaController::class, 'getAll' ]);

Route::get('/form-tambah', function() {
    return view('form-tambah');
});

Route::post('/tambah', [ MahasiswaController::class, 'tambah' ]);

Route::get('/hapus/{nim}', [ MahasiswaController::class, 'hapus' ]);

Route::get('/form-ubah/{nim}', [ MahasiswaController::class, 'formUbah' ]);

Route::post('/ubah', [ MahasiswaController::class, 'ubah' ]);


// ajax based apps

Route::get('/ajax', function() {
    return view('ajax.index');
});

Route::get('/ajax/get-all-data', [ ApiController::class, 'getAllData' ]);

Route::post('/ajax/simpan', [ ApiController::class, 'simpan' ]);

Route::get('/ajax/hapus/{nim}', [ ApiController::class, 'hapus' ]);
