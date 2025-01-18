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


// Route for the all news page
Route::get('/enroll', [PageController::class, 'enroll'])->name('enroll');
Route::post('/enroll/submit', [PageController::class, 'enrollSubmit'])->name('enroll.submit');

Auth::routes();

//admin routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/enrollments', [App\Http\Controllers\AdminController::class, 'indexEnrollment'])->name('admin.enrollment.index');
Route::get('/admin/enrollments/view/{id}', [App\Http\Controllers\AdminController::class, 'viewEnrollment'])->name('admin.enrollment.view');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
