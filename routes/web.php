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

// Web Routes
Route::namespace('Site')->group(function () {
    Route::get('/', 'HomeController@homepage')->name('home');

    // About us
    Route::match(['get','post'], '/about', 'HomeController@about')->name('site.about');

    // Portfolio
    Route::match(['get','post'], '/categories', 'HomeController@category')->name('site.category');
    Route::match(['get','post'], '/category/{slug}', 'HomeController@categoryProducts')->name('site.category.detail');

    // Products
    Route::match(['get','post'], '/products', 'HomeController@product')->name('site.products');
    Route::match(['get','post'], '/product/{slug}', 'HomeController@productDetail')->name('site.products.detail');

    // Products
    Route::match(['get','post'], '/contact-us', 'HomeController@contact')->name('site.contact');

    // Query Submit
    Route::match(['get','post'], '/homepage-query', 'EnquiryController@homepage_query')->name('site.home.query');
    Route::match(['get','post'], '/contactpage-query', 'EnquiryController@contactpage_query')->name('site.contact.query');
    Route::match(['get','post'], '/productpage-query', 'EnquiryController@productpage_query')->name('site.product.query');
});



