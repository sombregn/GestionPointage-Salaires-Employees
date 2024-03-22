<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
})->name('home');
 
Route::get('/about', [UserController::class, 'about'])->name('about');
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
    Route::post('/profile', [UserController::class, 'updateUserProfile'])->name('updateUserProfile');

    Route::get('/pointages', [PointageController::class, 'index'])->name('pointages');
    Route::get('/pointages/create', [PointageController::class, 'create'])->name('pointages/create');
    Route::post('/pointages/store', [PointageController::class, 'store'])->name('pointages/store');
    Route::get('/pointages/show/{id}', [PointageController::class, 'show'])->name('pointages/show');
    Route::get('/pointages/edit/{id}', [PointageController::class, 'edit'])->name('pointages/edit');
    Route::put('/pointages/edit/{id}', [PointageController::class, 'update'])->name('pointages/update');
    Route::delete('/pointages/destroy/{id}', [PointageController::class, 'destroy'])->name('pointages/destroy');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

 
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');

    Route::get('/admin/personnels', [PersonnelController::class, 'index'])->name('admin/personnels');
    Route::get('/admin/personnels/create', [PersonnelController::class, 'create'])->name('admin/personnels/create');
    Route::post('/admin/personnels/store', [PersonnelController::class, 'store'])->name('admin/personnels/store');
    Route::get('/admin/personnels/show/{id}', [PersonnelController::class, 'show'])->name('admin/personnels/show');
    Route::get('/admin/personnels/edit/{id}', [PersonnelController::class, 'edit'])->name('admin/personnels/edit');
    Route::put('/admin/personnels/edit/{id}', [PersonnelController::class, 'update'])->name('admin/personnels/update');
    Route::delete('/admin/personnels/destroy/{id}', [PersonnelController::class, 'destroy'])->name('admin/personnels/destroy');

    Route::put('/admin/personnels/{id}/desactivate', [PersonnelController::class, 'desactivate'])->name('admin.personnels.desactivate');
    Route::get('/admin/approved/{id}',[PersonnelController::class,'approved']);
    Route::get('/admin/canceled/{id}',[PersonnelController::class,'canceled']);

    Route::get('/admin/paiements', [PaiementController::class, 'index'])->name('admin/paiements');
    Route::get('/admin/paiements/create', [PaiementController::class, 'create'])->name('admin/paiements/create');
    Route::post('/admin/paiements/store', [PaiementController::class, 'store'])->name('admin/paiements/store');
    //Route::get('/admin/bulletin', [PaiementController::class, 'generatePDF'])->name('admin/bulletin');
    Route::get('admin/paiements/{id}/generate-pdf', [PaiementController::class, 'generatePDF'])->name('admin.paiements.generatePDF');

});