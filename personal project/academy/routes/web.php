<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CounsellorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;

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

//Route::get('/', function () {
//    return view('auth.login');
//});

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

            Route::get('admin/manage/country/view/', 'manage_country_view')->name('manage.country.view');
            Route::post('admin/manage/country/add', 'manage_country_add')->name('manage.country.save');
            Route::get('admin/manage/country/edit/{id}', 'manage_country_edit')->name('manage.country.edit');
            Route::post('admin/manage/country/delete/{id}', 'manage_country_delete')->name('manage.country.delete');
            Route::post('admin/manage/country/update/{id}', 'manage_country_update')->name('manage.country.update');

            Route::get('admin/testimonial/view', 'admin_testimonial_view')->name('admin.testimonial.view');
            Route::get('admin/testimonial/all', 'admin_testimonial_all')->name('admin.testimonial.all');
            Route::post('admin/testimonial/save/', 'admin_testimonial_save')->name('admin.testimonial.save');
            Route::get('admin/testimonial/edit/{id}', 'admin_testimonial_edit')->name('admin.testimonial.edit');
            Route::post('admin/testimonial/update/{id}', 'admin_testimonial_update')->name('admin.testimonial.update');
            Route::post('admin/testimonial/delete/{id}', 'admin_testimonial_delete')->name('admin.testimonial.delete');

            Route::get('admin/askgpt/view', 'admin_askgpt_view')->name('admin.askgpt.view');
            Route::get('admin/askgpt/all', 'admin_askgpt_all')->name('admin.askgpt.all');
            Route::post('admin/askgpt/save/', 'admin_askgpt_save')->name('admin.askgpt.save');
            Route::get('admin/askgpt/edit/{id}', 'admin_askgpt_edit')->name('admin.askgpt.edit');
            Route::post('admin/askgpt/update/{id}', 'admin_askgpt_update')->name('admin.askgpt.update');
            Route::post('admin/askgpt/delete/{id}', 'admin_askgpt_delete')->name('admin.askgpt.delete');

            Route::get('admin/resource/view', 'admin_resource_view')->name('admin.resource.view');
            Route::get('admin/resource/all', 'admin_resource_all')->name('admin.resource.all');
            Route::post('admin/resource/save/', 'admin_resource_save')->name('admin.resource.save');
            Route::get('admin/resource/edit/{id}', 'admin_resource_edit')->name('admin.resource.edit');
            Route::post('admin/resource/update/{id}', 'admin_resource_update')->name('admin.resource.update');
            Route::post('admin/resource/delete/{id}', 'admin_resource_delete')->name('admin.resource.delete');

            Route::get('admin/destination/view', 'admin_destination_view')->name('admin.destination.view');
            Route::get('admin/destination/all', 'admin_destination_all')->name('admin.destination.all');
            Route::post('admin/destination/save/', 'admin_destination_save')->name('admin.destination.save');
            Route::get('admin/destination/edit/{id}', 'admin_destination_edit')->name('admin.destination.edit');
            Route::post('admin/destination/update/{id}', 'admin_destination_update')->name('admin.destination.update');
            Route::post('admin/destination/delete/{id}', 'admin_destination_delete')->name('admin.destination.delete');

            Route::get('admin/course/view', 'admin_course_view')->name('admin.course.view');
            Route::get('admin/course/all', 'admin_course_all')->name('admin.course.all');
            Route::post('admin/course/save/', 'admin_course_save')->name('admin.course.save');
            Route::get('admin/course/edit/{id}', 'admin_course_edit')->name('admin.course.edit');
            Route::post('admin/course/update/{id}', 'admin_course_update')->name('admin.course.update');
            Route::post('admin/course/delete/{id}', 'admin_course_delete')->name('admin.course.delete');
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
            Route::get('/profile', 'profile')->name('profile');
            Route::get('/user/application', 'user_application')->name('user.application');
            Route::post('/user/application/save', 'user_application_save')->name('user.application.save');
            Route::get('/user/application/edit/{id}', 'user_application_edit')->name('user.application.edit');
            Route::post('/user/application/edit/{id}', 'user_application_edite')->name('user.application.edit');
            Route::get('/user/track/{id}', 'user_track')->name('user.track');
            Route::get('/user/chat/{id}', 'user_chat')->name('user.chat');
            Route::post('/user/chat/add/{id}', 'user_chat_add')->name('user.chat.add');
        });



    });

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/courses/{name}', 'courses_category')->name('courses.category');
    Route::get('/courses/general/search', 'courses_general_search')->name('courses.general.search');
    Route::get('/faq/general/search', 'ask_general_search')->name('faq.general.search');
    Route::get('/courses/detail/{title}', 'courses_detail')->name('courses.detail');
    Route::get('/destination/detail/{id}', 'destination_detail')->name('destination.detail');
    Route::get('/resources', 'resources')->name('resources');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/ask/category/{ask_name}', 'faq_category_d')->name('ask.details');
    Route::get('/about', 'about')->name('about');
    Route::get('/consultation', 'consultation')->name('consultation');
    Route::get('/auth/login', 'auth_login')->name('user.login');
    Route::get('/auth/register', 'auth_register')->name('user.register');
    Route::post('/consultation/add', 'consultation_add')->name('consultation.add');
});



Route::get('/refresh-migration', function () {
        \Artisan::call('migrate:refresh');
        return 'Migration Refreshed!';
    });

    Route::get('/create-storage-link', function () {
        try {
            Artisan::call('storage:link');
            return 'Storage link created!';
        } catch (\Exception $e) {
            return 'Error creating storage link: ' . $e->getMessage();
        }
    });


require __DIR__.'/auth.php';
