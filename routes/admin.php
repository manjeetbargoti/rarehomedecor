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

Auth::routes(['login' => false, 'register' => false]);

Route::prefix('admin')->group(function () {

    Route::namespace('Admin')->group(function () {
        Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');

        // Banner Routes
        Route::match(['get','post'], '/banner', 'BannerController@index')->name('admin.banner.list');
        Route::match(['get','post'], '/banner/create', 'BannerController@create')->name('admin.banner.create');
        Route::match(['get','post'], '/banner/{id}/update', 'BannerController@edit')->name('admin.banner.edit');
        
        // Category Routes
        Route::match(['get','post'], '/category', 'CategoryController@index')->name('admin.category.list');
        Route::match(['get','post'], '/category/create', 'CategoryController@create')->name('admin.category.create');
        Route::match(['get','post'], '/category/{id}/update', 'CategoryController@update')->name('admin.category.edit');

        // Product Routes
        Route::match(['get','post'], '/products', 'ProductController@index')->name('admin.product.list');
        Route::match(['get','post'], '/products/create', 'ProductController@create')->name('admin.product.create');
        Route::match(['get','post'], '/products/{id}/update', 'ProductController@edit')->name('admin.product.edit');

        // Settings Routes
        Route::match(['get','post'], '/general-settings', 'SettingController@general')->name('admin.settings.general');
        Route::match(['get','post'], '/social-settings', 'SettingController@social')->name('admin.settings.social');
        Route::match(['get','post'], '/website-settings', 'SettingController@website')->name('admin.settings.website');
        Route::match(['get','post'], '/footer-settings', 'SettingController@footer')->name('admin.settings.footer');

        // Pages Routes
        Route::match(['get','post'], '/pages', 'PageController@index')->name('admin.page.list');
        Route::match(['get','post'], '/page/create', 'PageController@create')->name('admin.page.create');
        Route::match(['get','post'], '/page/{id}/edit', 'PageController@edit')->name('admin.page.edit');
        Route::match(['get','post'], '/page/{id}/delete', 'PageController@delete')->name('admin.page.delete');

        // Enquiry Routes
        Route::match(['get','post'], '/product-enquiry', 'EnquiryController@productEnquiry')->name('admin.enquiry.product.list');
        Route::match(['get','post'], '/contact-enquiry', 'EnquiryController@contactEnquiry')->name('admin.enquiry.contact.list');
        Route::match(['get','post'], '/enquiry/{id}/view', 'EnquiryController@view')->name('admin.enquiry.view');
        Route::match(['get','post'], '/enquiry/{id}/pending', 'EnquiryController@enquiryPending')->name('admin.enquiry.status.pending');
        Route::match(['get','post'], '/enquiry/{id}/complete', 'EnquiryController@enquiryComplete')->name('admin.enquiry.status.complete');

        // Update Admin Password
        Route::match(['get','post'], '/update-password', 'HomeController@updateAdminPassword')->name('admin.update.password');
    });

    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('/register', 'Auth\RegisterController@register')->name('register');

});

