<?php
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('enduser.index');
})->name('home');

Route::get('/about', function () {
    return view('enduser.about');
})->name('about');

Route::get('/shop', function () {
    return view('enduser.shop');
})->name('shop');

Route::get('/contact', function () {
    return view('enduser.contact');
})->name('contact');

Route::get('/shopsingle', function () {
    return view('enduser.layout.shopsingle');
})->name('shopsingle');











require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';
