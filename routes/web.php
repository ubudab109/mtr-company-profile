<?php

use App\Http\Controllers\CompanyProfileController;
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
Route::group(['middleware' => 'lang'], function() {
    Route::get('', [CompanyProfileController::class, 'productInIndex'])->name('index');
    Route::get('about-us', [CompanyProfileController::class, 'aboutUs'])->name('about');
    Route::get('list-product', [CompanyProfileController::class, 'product'])->name('product');
    Route::get('contact', function () {
        return view('pages.contact');
    })->name('contact');
});
Route::get('/{lang}', [CompanyProfileController::class, 'switchLang'])->name('lang.switch');

// Route::get('/', function () {
//     return view('pages.index');
// });
