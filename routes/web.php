<?php

use App\Http\Controllers\Dashboard\CategoriesControllers;
use App\Http\Controllers\Dashboard\RemoveCategoryImageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', \App\Http\Controllers\HomePageController::class)->name('home');
Route::get('/about-us', \App\Http\Controllers\AboutUsPageController::class)->name('about-us');
Route::get('/contact-us', \App\Http\Controllers\ContactUsPageController::class)->name('contact-us');

Route::get('/categories', \App\Http\Controllers\CategoriesPageController::class)->name('categories.index');
Route::get('/category/{category:slug}', \App\Http\Controllers\ProductsByCategoryIndexController::class)->name('category.products.index');
Route::get('/category/{category:slug}/product/{product:slug}', \App\Http\Controllers\ProductInCategoryShow::class)->name('category.product.show');


Route::post('/contact-send', \App\Http\Controllers\ContactFormSendController::class)->name('contact.send');
Route::post('api/contact-send', \App\Http\Controllers\Api\ContactFormSendController::class);

Route::group([
    'middleware' => ['auth', 'verified'],
    'as' => 'dashboard.',
    'prefix' => '/dashboard',
    'namespace' => "App\Http\Controllers\Dashboard"
    ], function() {
//    Route::get('/', \App\Http\Controllers\Dashboard\DashboardController::class)->name('index');
    Route::resource('categories', CategoriesControllers::class);
    Route::delete('/media/{media}/image-delete', RemoveCategoryImageController::class)->name('categories.image-delete');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
