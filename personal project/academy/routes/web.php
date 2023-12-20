<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    Route::middleware('auth')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('admin/user/view', 'user_view')->name('user.view');
            Route::get('admin/user/add/view', 'user_add_view')->name('user.add.view');
            Route::post('admin/user/save/', 'admin_user_save')->name('admin.user.save');
            Route::get('admin/user/edit/{id}', 'admin_user_edit')->name('admin.user.edit');
            Route::post('admin/user/update/{id}', 'admin_user_update')->name('admin.user.update');
            Route::post('admin/user/delete/{id}', 'admin_user_delete')->name('admin.user.delete');
            Route::post('admin/user/block/{id}', 'admin_user_block')->name('admin.user.block');

            Route::get('admin/consultation/all', 'consultation_all')->name('consultation.all');
            Route::post('admin/consultation/delete/{id}', 'consultation_delete')->name('consultation.delete');
            Route::get('admin/counsellor/view', 'counsellor_view')->name('counsellor.view');
            Route::post('admin/counsellor/save', 'admin_counsellor_save')->name('admin.counsellor.save');
            Route::get('admin/counsellor/all', 'counsellor_all')->name('counsellor.all');
            Route::get('admin/counsellor/edit/{id}', 'counsellor_edit')->name('counsellor.edit');
            Route::post('admin/counsellor/update/{id}', 'counsellor_update')->name('admin.counsellor.update');
            Route::post('admin/counsellor/delete/{id}', 'admin_counsellor_delete')->name('admin.counsellor.delete');
            Route::post('admin/counsellor/block/{id}', 'admin_counsellor_block')->name('admin.counsellor.block');

            Route::get('admin/application/view', 'application_view')->name('application.view');
            Route::get('admin/application/all', 'application_all')->name('application.all');
            Route::get('admin/status/view', 'status_view')->name('status.view');
            Route::get('admin/status/edit/{id}', 'status_edit')->name('status.edit');
            Route::post('admin/status/update/{id}', 'status_update')->name('status.update');
            Route::post('admin/status/add', 'status_add')->name('status.add');
            Route::post('admin/status/delete/{id}', 'status_delete')->name('status.delete');
            Route::get('admin/profile/view', 'admin_profile_view')->name('admin.profile.view');
        });

        Route::controller(CounsellorController::class)->group(function () {
            
        });
        
        Route::controller(UserController::class)->group(function () {
            
        });


    
    });
    
require __DIR__.'/auth.php';
