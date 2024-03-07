<?php

use App\Http\Controllers\AdavanceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\generatepdf;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplateController;


use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('/post',[HomeController::class,'post'])->middleware('auth')->name('post');
Route::get('/template',[TemplateController::class,'index']);
Route::get('/site',[TemplateController::class,'site'])->name('site');
Route::get('/employees',[EmployeeController::class,'index'])->name('employees.index');
Route::post('/employees',[EmployeeController::class,'store'])->name('employees.store');
Route::get('/employees/{employee}/show',[EmployeeController::class,'show'])->name('employees.show');
Route::post('/employees/{employee}/adavances',[AdavanceController::class,'store'])->name('employees.adavances.store');
Route::get('/adavances',[AdavanceController::class,'index'])->name('adavances.index');
Route::get('generatepdf',[generatepdf::class,'generatepdf'])->name('pdf');
Route::get('/company',[CompanyController::class,'create'])->name('company.create');
Route::post('/company',[CompanyController::class,'store'])->name('company.store');









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
