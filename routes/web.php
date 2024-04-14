<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CartController;
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


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::get('/add_staff_view',[AdminController::class,'addstaffview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/upload_staff',[AdminController::class,'upload_staf']);

Route::get('/deletestaff/{id}',[AdminController::class,'deletestaff']);

Route::get('/showstaff',[AdminController::class,'showstaff']);

Route::get('/updatestaff/{id}',[AdminController::class,'updatestaff']);

Route::post('/editstaff/{id}',[AdminController::class,'editstaff']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/makeadmin',[AdminController::class,'makeadmin']);

Route::get('/make_admin/{id}',[AdminController::class,'make_admin']);

Route::get('/doctoraccess',[AdminController::class,'doctoraccess']);

Route::get('/doctor_access/{id}',[AdminController::class,'doctor_access']);

Route::get('/makereport',[DoctorController::class,'makereport']);

Route::post('/make_report',[DoctorController::class,'make_report']);

Route::get('/myreport',[HomeController::class,'myreport']);

Route::get('/download/{id}',[HomeController::class,'download']);

Route::get('/show_report',[DoctorController::class,'show_report']);

Route::get('/updatereport/{id}',[DoctorController::class,'updatereport']);

Route::post('/editreport/{id}',[DoctorController::class,'editreport']);

Route::get('/show_appointment',[DoctorController::class,'show_appointment']);

Route::get('/comment',[HomeController::class,'comment']);

Route::get('/searchdoctor',[HomeController::class,'searchdoctor']);

// Arian nuhan
Route::get('/add_test_view',[AdminController::class,'addtest']);

Route::get('/change_test_view',[AdminController::class,'changetest']);

Route::get('/add_test_form',[AdminController::class,'add_test_in_database']);

Route::get('/show_test_view',[HomeController::class,'show_test_view_controller']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});

//Route::delete('/tests/{id}', 'AdminController@destroy')->name('tests.destroy');
Route::delete('/tests/{id}', [AdminController::class, 'destroy'])->name('tests.destroy');

Route::post('/change_test_form', [AdminController::class, 'change_test_controller']);


Route::get('/test',[AdminController::class,'test']);

Route::post('/cart_add/{id}', [CartController::class, 'addToCart']);

Route::get('/show_doctor_list',[HomeController::class,'show_doctor_list_controller']);

//});

Route::post('/cart_remove/{id}', [CartController::class, 'removeToCart']);

Route::get('/upload_patient_report/', function () { 
    return view('user.upload_patient_report');
});

Route::post('/upload_patient_report', [CartController::class, 'uploadPatientReport'])->name("upload_patient_report");


Route::get('/see_patient_report/', [CartController::class, 'seePatientReport'])->name("see_patient_report");

Route::post('/checkout/', [CartController::class, 'checkout'])->name('checkout');

Route::get('/news/', function () { return view('user.news');
});