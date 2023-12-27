<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CounsellorController;
use App\Http\Controllers\AuthController;

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

// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirect', [AuthController::class, 'check_login'])->middleware(['auth'])->name('redirect');
Route::get('/admin/dashboard', [AuthController::class, 'admin_dashboard'])->middleware(['auth'])->name('admin.dashboard');
Route::get('/counsellor/dashboard', [AuthController::class, 'counsellor_dashboard'])->middleware(['auth'])->name('counsellor.dashboard');

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
            Route::post('admin/consultation/status/{id}', 'admin_consultation_status')->name('admin.consultation.status');
            Route::get('admin/counsellor/view', 'counsellor_view')->name('counsellor.view');
            Route::post('admin/counsellor/save', 'admin_counsellor_save')->name('admin.counsellor.save');
            Route::get('admin/counsellor/all', 'counsellor_all')->name('counsellor.all');
            Route::get('admin/counsellor/edit/{id}', 'counsellor_edit')->name('counsellor.edit');
            Route::post('admin/counsellor/update/{id}', 'counsellor_update')->name('admin.counsellor.update');
            Route::post('admin/counsellor/delete/{id}', 'admin_counsellor_delete')->name('admin.counsellor.delete');
            Route::post('admin/counsellor/block/{id}', 'admin_counsellor_block')->name('admin.counsellor.block');
            Route::get('admin/counsellor/applications/{id}', 'admin_counsellor_applications')->name('admin.counsellor.applications');
            Route::get('admin/application/view', 'application_view')->name('application.view');
            Route::get('admin/application/all', 'application_all')->name('application.all');
            Route::post('admin/application/save', 'admin_application_save')->name('admin.application.save');
            Route::get('admin/application/edit/{id}', 'admin_application_edit')->name('admin.application.edit');
            Route::post('admin/application/assigned/{id}', 'admin_application_assigned')->name('admin.application.assigned');
            Route::post('admin/application/status/{id}', 'admin_application_status')->name('admin.application.status');
            Route::post('admin/application/update/{id}', 'admin_application_update')->name('admin.application.update');
            Route::post('admin/application/delete/{id}', 'admin_application_delete')->name('admin.application.delete');

            Route::get('admin/status/view', 'status_view')->name('status.view');
            Route::get('admin/status/edit/{id}', 'status_edit')->name('status.edit');
            Route::post('admin/status/update/{id}', 'status_update')->name('status.update');
            Route::post('admin/status/add', 'status_add')->name('status.add');
            Route::post('admin/status/delete/{id}', 'status_delete')->name('status.delete');
            Route::get('admin/profile/view', 'admin_profile_view')->name('admin.profile.view');
            Route::post('admin/profile/update/{id}', 'admin_profile_update')->name('admin.profile.update');
            Route::post('admin/profile/password/update/', 'admin_password_update')->name('admin.password.update');
            Route::get('logout/', 'logout')->name('logout');

            Route::get('admin/role/view', 'role_view')->name('role.view');
            Route::get('admin/role/edit/{id}', 'role_edit')->name('role.edit');
            Route::post('admin/role/update/{id}', 'role_update')->name('role.update');
            Route::post('admin/role/add', 'role_add')->name('role.add');
            Route::get('admin/role/permission/view/{id}', 'role_permission')->name('role.permission');
            Route::post('admin/role/permission/set/{id}', 'role_permission_set')->name('role.permission.set');
            Route::post('admin/role/delete/{id}', 'role_delete')->name('role.delete');
            Route::get('admin/admin_manager/view', 'admin_manager_view')->name('admin_manager.view');
            Route::post('admin/admin_manager/save', 'admin_admin_manager_save')->name('admin.admin_manager.save');
            Route::get('admin/admin_manager/all', 'admin_manager_all')->name('admin_manager.all');
            Route::get('admin/admin_manager/edit/{id}', 'admin_manager_edit')->name('admin_manager.edit');
            Route::post('admin/admin_manager/update/{id}', 'admin_manager_update')->name('admin.admin_manager.update');
            Route::post('admin/admin_manager/delete/{id}', 'admin_admin_manager_delete')->name('admin.admin_manager.delete');
            Route::post('admin/admin_manager/block/{id}', 'admin_admin_manager_block')->name('admin.admin_manager.block');
        });

        Route::controller(CounsellorController::class)->group(function () {
            Route::get('counsellor/profile/view', 'counsellor_profile_view')->name('counsellor.profile.view');
            Route::post('counsellor/profile/update/{id}', 'counsellor_profile_update')->name('counsellor.profile.update');
            Route::post('counsellor/profile/password/update/', 'counsellor_password_update')->name('counsellor.password.update');
            Route::post('counsellor/application/status/{id}', 'counsellor_application_status')->name('counsellor.application.status');
            Route::get('counsellor/application/edit/{id}', 'counsellor_application_edit')->name('counsellor.application.edit');
            Route::get('counsellor/application/assigned/', 'counsellor_application_assigned')->name('counsellor.application.assigned');
            Route::get('counsellor/application/edit/{id}', 'counsellor_application_edit')->name('counsellor.application.edit');
            Route::get('counsellor/application/chat/{id}', 'counsellor_application_chat')->name('counsellor.application.chat');
            Route::post('counsellor/application/chat/save', 'counsellor_application_chat_save')->name('counsellor.application.chat.save');
        });
        
        Route::controller(UserController::class)->group(function () {
            
        });


    
    });
    
require __DIR__.'/auth.php';
