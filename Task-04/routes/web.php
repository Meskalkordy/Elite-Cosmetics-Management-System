
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::resource('products', ProductController::class);


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/features', [HomeController::class, 'features']);
Route::get('/team', [HomeController::class, 'team']);