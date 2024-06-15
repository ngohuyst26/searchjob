<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\RegisterCandidate;
use App\Livewire\RegisterCompany;
use App\Livewire\HomePage;
use App\Livewire\UserPage;
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

Route::get('/', HomePage::class);
Route::prefix('dang-ky')->name('register.')->group(function (){
    Route::get('/ung-vien', RegisterCandidate::class)->name('candidate');
    Route::get('/nha-tuyen-dung', RegisterCompany::class)->name('company');
});
//    Route::get('ung-vien',RegisterCandidate::class)->name('user');
//    Route::get('nha-tuyen-dung', RegisterCandidate::class)->name('cty');
//});