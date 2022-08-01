<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'user.','namespace' => 'App\Http\Controllers', 'prefix' => 'user',], function () {
    Route::get('forget-password', 'User\UserController@forgetPassword')->name('forgetPassword');
    Route::post('update-password', 'User\UserController@updatePassword')->name('updatePassword');

});

Route::group(['middleware' => 'auth','namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboard','Dashboard\DashboardController@index')->name('dashboard');




    /*
    |--------------------------------------------------------------------------
    | User CRUD
    |--------------------------------------------------------------------------
    |
    */

    Route::group(['as' => 'user.', 'prefix' => 'user',], function () {
        Route::get('', 'User\UserController@index')->name('index')->middleware('permission:user-index');
        Route::get('user-data', 'User\UserController@getAllData')->name('data')->middleware('permission:user-data');
        Route::get('create', 'User\UserController@create')->name('create')->middleware('permission:user-create');
        Route::post('', 'User\UserController@store')->name('store')->middleware('permission:user-store');
        Route::get('{user}/edit', 'User\UserController@edit')->name('edit')->middleware('permission:user-edit');
        Route::put('{user}', 'User\UserController@update')->name('update')->middleware('permission:user-update');
        Route::get('user/{id}/destroy', 'User\UserController@destroy')->name('destroy')->middleware('permission:user-delete');
        Route::get('update-profile', 'User\UserController@profileUpdate')->name('profileUpdate');
        Route::post('update-profile/{id}', 'User\UserController@profileUpdateStore')->name('updateProfile');

    });

    /*
    |--------------------------------------------------------------------------
    | Role CRUD
    |--------------------------------------------------------------------------
    |
    */

    Route::group(['as' => 'role.', 'prefix' => 'role',], function () {
        Route::get('', 'Role\RoleController@index')->name('index')->middleware('permission:role-index');
        Route::get('role-data', 'Role\RoleController@getAllData')->name('data')->middleware('permission:role-data');
        Route::get('create', 'Role\RoleController@create')->name('create')->middleware('permission:role-create');
        Route::post('', 'Role\RoleController@store')->name('store')->middleware('permission:role-store');
        Route::get('{role}/edit', 'Role\RoleController@edit')->name('edit')->middleware('permission:role-edit');
        Route::put('{role}', 'Role\RoleController@update')->name('update')->middleware('permission:role-update');
        Route::get('role/{id}/destroy', 'Role\RoleController@destroy')->name('destroy')->middleware('permission:role-delete');
    });

    /*
    |--------------------------------------------------------------------------
    | Permission CRUD
    |--------------------------------------------------------------------------
    |
    */

    Route::group(['as' => 'permission.', 'prefix' => 'permission',], function () {
        Route::get('', 'Permission\PermissionController@index')->name('index')->middleware('permission:role-index');
        Route::get('permission-data', 'Permission\PermissionController@getAllData')->name('data')->middleware('permission:role-data');
        Route::get('create', 'Permission\PermissionController@create')->name('create')->middleware('permission:permission-create');
        Route::post('', 'Permission\PermissionController@store')->name('store')->middleware('permission:role-store');
        Route::get('{permission}/edit', 'Permission\PermissionController@edit')->name('edit')->middleware('permission:permission-edit');
        Route::put('{permission}', 'Permission\PermissionController@update')->name('update')->middleware('permission:role-update');
        Route::get('permission/{id}/destroy', 'Permission\PermissionController@destroy')->name('destroy')->middleware('permission:permission-delete');
    });


    Route::group(['as' => 'category.', 'prefix' => 'category',], function () {
        Route::get('', 'ServiceCategory\ServiceCategoryController@index')->name('index');
        Route::get('create', 'ServiceCategory\ServiceCategoryController@create')->name('create');
        Route::post('', 'ServiceCategory\ServiceCategoryController@store')->name('store');
        Route::get('{category}/edit', 'ServiceCategory\ServiceCategoryController@edit')->name('edit');
        Route::put('{category}', 'ServiceCategory\ServiceCategoryController@update')->name('update');
        Route::get('category/{id}/destroy', 'ServiceCategory\ServiceCategoryController@destroy')->name('destroy');
    });

    Route::group(['as' => 'service.', 'prefix' => 'service',], function () {
        Route::get('', 'Service\ServiceController@index')->name('index');
        Route::get('create', 'Service\ServiceController@create')->name('create');
        Route::post('', 'Service\ServiceController@store')->name('store');
        Route::get('{service}/edit', 'Service\ServiceController@edit')->name('edit');
        Route::put('{service}', 'Service\ServiceController@update')->name('update');
        Route::get('service/{id}/destroy', 'Service\ServiceController@destroy')->name('destroy');
    });

    Route::group(['as' => 'client.', 'prefix' => 'client',], function () {
        Route::get('', 'Client\ClientController@index')->name('index');
        Route::get('create', 'Client\ClientController@create')->name('create');
        Route::post('', 'Client\ClientController@store')->name('store');
        Route::get('{client}/edit', 'Client\ClientController@edit')->name('edit');
        Route::put('{client}', 'Client\ClientController@update')->name('update');
        Route::get('client/{id}/destroy', 'Client\ClientController@destroy')->name('destroy');
    });

    Route::group(['as' => 'menu.', 'prefix' => 'menu',], function () {
        Route::get('', 'Menu\MenuController@index')->name('index');
        Route::get('create', 'Menu\MenuController@create')->name('create');
        Route::post('', 'Menu\MenuController@store')->name('store');
        Route::get('{menu}/edit', 'Menu\MenuController@edit')->name('edit');
        Route::put('{menu}', 'Menu\MenuController@update')->name('update');
        Route::get('menu/{id}/destroy', 'Menu\MenuController@destroy')->name('destroy');
    });

    Route::group(['as' => 'page.', 'prefix' => 'page',], function () {
        Route::get('', 'Page\PageController@index')->name('index');
        Route::get('create', 'Page\PageController@create')->name('create');
        Route::post('', 'Page\PageController@store')->name('store');
        Route::get('{page}/edit', 'Page\PageController@edit')->name('edit');
        Route::put('{page}', 'Page\PageController@update')->name('update');
        Route::get('page/{id}/destroy', 'Page\PageController@destroy')->name('destroy');
    });

    Route::group(['as' => 'booking.', 'prefix' => 'booking',], function () {
        Route::get('', 'Booking\BookingController@index')->name('index');
        Route::get('quote', 'Booking\BookingController@quote')->name('quote');
        Route::post('', 'Booking\BookingController@store')->name('store');
    });

    Route::get('setting', 'Setting\SettingController@index')->name('setting.index');
    Route::put('setting/update', 'Setting\SettingController@update')->name('setting.update');



});

Route::get('', [App\Http\Controllers\Frontend\FrontendController::class, 'homepage'])->name('home');
Route::get('services', [App\Http\Controllers\Frontend\FrontendController::class, 'services'])->name('services');
Route::get('servicesdetail/{services}', [App\Http\Controllers\Frontend\FrontendController::class, 'servicesDetails'])->name('services.detail');
Route::get('recent-quote', [App\Http\Controllers\Frontend\FrontendController::class, 'quote'])->name('recent-quote');
Route::post('quote-details', [App\Http\Controllers\Frontend\FrontendController::class, 'quoteDetails'])->name('quote-details');
Route::get('clients', [App\Http\Controllers\Frontend\FrontendController::class, 'client'])->name('clients');
Route::get('about', [App\Http\Controllers\Frontend\FrontendController::class, 'about'])->name('about');
Route::get('contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact'])->name('contact');
Route::post('contact-details', [App\Http\Controllers\Frontend\FrontendController::class, 'contactDetails'])->name('contact-details');
