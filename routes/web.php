<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Mail\ContactFormMail;


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
})->name('home');



// Route for the About Us page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route for the Our Services page
Route::get('/services', [PageController::class, 'services'])->name('services');

// Route for the Contact Us page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route for the all news page
Route::get('/newsandevents', [PageController::class, 'news'])->name('newsandevents');

// Route for the all news page
Route::get('/news-details', [PageController::class, 'newsdetails'])->name('news-details');


// Route for the all enroll page
Route::get('/enroll', [PageController::class, 'enroll'])->name('enroll');
Route::get('/enroll_morning', [PageController::class, 'enroll_morning'])->name('enroll_morning');
Route::get('/enroll_tuition', [PageController::class, 'enroll_tuition'])->name('enroll_tuition');   
Route::get('/thank-you-feedback', [PageController::class, 'feedback'])->name('feedback');    

Route::post('/enroll/submit', [PageController::class, 'enrollSubmit'])->name('enroll.submit');
Route::post('/enroll/tuition/submit', [PageController::class, 'enrollTuitionSubmit'])->name('enroll.tuition.submit');

Auth::routes();

//admin routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/enrollments', [App\Http\Controllers\AdminController::class, 'indexEnrollment'])->name('admin.enrollment.index');
Route::get('/admin/enrollments/view/{id}', [App\Http\Controllers\AdminController::class, 'viewEnrollment'])->name('admin.enrollment.view');
Route::get('/admin/enrollments/download/{id}',[App\Http\Controllers\AdminController::class, 'downloadEnrollment'])->name('admin.enrollment.download');
Route::get('/admin/tuition/enrollments', [App\Http\Controllers\AdminController::class, 'indexTuitionEnrollment'])->name('admin.enrollment.tuition.index');
Route::get('/admin/tuition/enrollments/view/{id}', [App\Http\Controllers\AdminController::class, 'viewTuitionEnrollment'])->name('admin.enrollment.tuition.view');
Route::get('/admin/tuition/enrollments/download/{id}',[App\Http\Controllers\AdminController::class, 'downloadTuitionEnrollment'])->name('admin.enrollment.tuition.download');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
