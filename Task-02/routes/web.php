
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::resource('products', ProductController::class);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/features', [HomeController::class, 'features']);
Route::get('/team', [HomeController::class, 'team']);