<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CareerController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicantController;

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

Route::get('/', [FrontEndController::class,'home'])->name('home');
Route::get('/home', [FrontEndController::class,'home'])->name('home');

Route::get('career', [CareerController::class,'index'])->name('career');
Route::get('career/jobdetails/{id}',[CareerController::class,'jobdetails'])->name('career.jobdetails');
Route::post('career/applyjobs/{id}',[CareerController::class,'applyjobs'])->name('career.applyjobs');


Auth::routes();
Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/register', [RegisterController::class, 'index'])->name('register');


// // Jobs Start

Route::get('/admin/addjobs', [JobsController::class, 'index'])->name('admin.addjobs');
Route::post('/admin/addjobs/store', [JobsController::class, 'store'])->name('admin.store');
Route::get('/admin/joblist', [JobsController::class, 'joblist'])->name('admin.joblist');
Route::get('/admin/joblistDetails/{id}', [JobsController::class, 'joblistDetails'])->name('admin.joblistDetails');
Route::get('/admin/joblist/{id}', [JobsController::class, 'jobsgetEdit'])->name('admin.JobsGetEdit');
Route::put('/admin/joblist/{id}', [JobsController::class, 'jobsEdit'])->name('admin.JobsEdit');
Route::delete('/admin/joblist/{id}', [JobsController::class, 'delete'])->name('adminJobList.delete');
Route::get('/changeJobListStatus', [JobsController::class, 'changeStatus'])->name('admin.changeJobListStatus');
// // Jobs End

// // Applicants Start
Route::get('admin/applicants',[ApplicantController::class, 'index'])->name('admin.applicants');
Route::delete('admin/applicants/{id}',[ApplicantController::class, 'delete'])->name('adminApplicant.delete');
// // Applicants End

