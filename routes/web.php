<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Web Routes FOR FRONTEND
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\Frontend\PageController@index')->name('homepage');
Route::get('/coursepage','App\Http\Controllers\Frontend\PageController@coursepage')->name('coursepage');
Route::get('/coursedetails/{batch_slug}','App\Http\Controllers\Frontend\PageController@coursedetails')->name('coursedetails');
Route::get('/frontend_checkout/{batch_slug}','App\Http\Controllers\Frontend\PageController@frontend_checkout')->name('frontend.checkout');
Route::get('/contact_us','App\Http\Controllers\Frontend\PageController@contact_us')->name('frontend.contact_us');

// Frontend Auth Routes
Route::get('/frontend_login','App\Http\Controllers\Frontend\PageController@frontend_login')->name('frontend_login');
Route::get('/frontend_register','App\Http\Controllers\Frontend\PageController@frontend_register')->name('frontend_register');
Route::get('/frontend_dashboard','App\Http\Controllers\Frontend\PageController@frontend_dashboard')->name('frontend_dashboard');

// student dashboard Controller routes
Route::post('/student_dashboard/{id}','App\Http\Controllers\Frontend\StudentDashboardController@student_dashboard_update')->name('student_dashboard.update');



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| WEB ROUTES FOR BACKEND 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/blank', function () {
    return view('backend.template.blank');
});

Route::group(['prefix'=>'/admin'],function(){
   
    Route::get('/dashboard','App\Http\Controllers\Backend\DashboardController@dashboard')->middleware(['auth','verified'])->name('dashboard');

    // ALL BRANCHES 
    Route::group(['prefix'=>'/branches'],function(){

    	Route::get('/manage','App\Http\Controllers\Backend\BranchController@manage')->name('branch.manage');
    	Route::get('/create','App\Http\Controllers\Backend\BranchController@create')->name('branch.create');
    	Route::post('/store','App\Http\Controllers\Backend\BranchController@store')->name('branch.store');
    	Route::get('/edit/{id}','App\Http\Controllers\Backend\BranchController@edit')->name('branch.edit');
    	Route::post('/update/{id}','App\Http\Controllers\Backend\BranchController@update')->name('branch.update');
    	Route::post('/delete/{id}','App\Http\Controllers\Backend\BranchController@delete')->name('branch.delete');

    });

    // ALL Mentor 
    Route::group(['prefix'=>'/mentors'],function(){

        Route::get('/manage','App\Http\Controllers\Backend\MentorController@manage')->name('mentor.manage');
        Route::get('/create','App\Http\Controllers\Backend\MentorController@create')->name('mentor.create');
        Route::post('/store','App\Http\Controllers\Backend\MentorController@store')->name('mentor.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\MentorController@edit')->name('mentor.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\MentorController@update')->name('mentor.update');
        Route::post('/delete/{id}','App\Http\Controllers\Backend\MentorController@delete')->name('mentor.delete');

    });

    // ALL  Batch routes  
    Route::group(['prefix'=>'/batch'],function(){

        Route::get('/manage','App\Http\Controllers\Backend\BatchController@index')->name('batch.manage');
        Route::get('/create','App\Http\Controllers\Backend\BatchController@create')->name('batch.create');
        Route::post('/store','App\Http\Controllers\Backend\BatchController@store')->name('batch.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BatchController@edit')->name('batch.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\BatchController@update')->name('batch.update');
        Route::post('/delete/{id}','App\Http\Controllers\Backend\BatchController@destroy')->name('batch.delete');

    });

    // ALL Course 
    Route::group(['prefix'=>'/courses'],function(){

        Route::get('/manage','App\Http\Controllers\Backend\CourseController@manage')->name('course.manage');
        Route::get('/create','App\Http\Controllers\Backend\CourseController@create')->name('course.create');
        Route::post('/store','App\Http\Controllers\Backend\CourseController@store')->name('course.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CourseController@edit')->name('course.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CourseController@update')->name('course.update');
        Route::post('/delete/{id}','App\Http\Controllers\Backend\CourseController@delete')->name('course.delete');

    });

    // ALL Course  Curriculum
    Route::group(['prefix'=>'/CourseCurriculum'],function(){

        Route::get('/manage','App\Http\Controllers\Backend\CourseCurriculumController@manage')->name('CourseCurriculum.manage');
        Route::get('/create','App\Http\Controllers\Backend\CourseCurriculumController@create')->name('CourseCurriculum.create');
        Route::post('/store','App\Http\Controllers\Backend\CourseCurriculumController@store')->name('CourseCurriculum.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CourseCurriculumController@edit')->name('CourseCurriculum.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CourseCurriculumController@update')->name('CourseCurriculum.update');
        Route::post('/delete/{id}','App\Http\Controllers\Backend\CourseCurriculumController@delete')->name('CourseCurriculum.delete');

    });

    // ALL Course Coupon  
    Route::group(['prefix'=>'/coupon'],function(){

        Route::get('/manage','App\Http\Controllers\Backend\CouponController@index')->name('coupon.manage');
        Route::get('/create','App\Http\Controllers\Backend\CouponController@create')->name('coupon.create');
        Route::post('/store','App\Http\Controllers\Backend\CouponController@store')->name('coupon.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CouponController@edit')->name('coupon.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\CouponController@update')->name('coupon.update');
        Route::post('/delete/{id}','App\Http\Controllers\Backend\CouponController@destroy')->name('coupon.delete');

    });

});

require __DIR__.'/auth.php';
