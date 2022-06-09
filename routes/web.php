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


Route::get('/', 'FrontEndController@index')->name('index');

Auth::routes();

Route::get('/news/{slug}', 'FrontEndController@newsSingle')->name('newsSingle');


Route::get('/forget-password', 'AdminLoginController@forgetPassword')->name('forgetPassword');

     Route::prefix('/admin')->group(function(){
         // Admin Login
         Route::match(['get', 'post'], '/login', 'AdminLoginController@adminLogin')->name('adminLogin');
           Route::group(['middleware' => 'admin'], function(){
               // Admin Dashboard
               Route::get('/dashboard', 'AdminLoginController@adminDashboard')->name('adminDashboard');
               // Admin Profile
               Route::get('/profile', 'AdminLoginController@profile')->name('profile');
               // Admin Profile Update
               Route::post('/profile/update/{id}', 'AdminLoginController@profileUpdate')->name('profileUpdate');
               // Change Password
               Route::get('/profile/change_password', 'AdminLoginController@changePassword')->name('changePassword');
               // Check User Password
               Route::post('/profile/check-password', 'AdminLoginController@checkUserPassword')->name('checkUserPassword');
               // Update Admin Password
               Route::post('/profile/update_password/{id}', 'AdminLoginController@upatePassword')->name('upatePassword');


               // Category
               Route::get('/category/index', 'CategoryController@index')->name('category.index');
               Route::get('/category/add', 'CategoryController@add')->name('category.add');
               Route::post('/category/store', 'CategoryController@store')->name('category.store');
               Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
               Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
               Route::get('/delete-category/{id}', 'CategoryController@delete')->name('category.delete');

               // News
               Route::get('/news/index', 'NewsController@index')->name('news.index');
               Route::get('/news/add', 'NewsController@add')->name('news.add');
               Route::post('/news/store', 'NewsController@store')->name('news.store');
               Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
               Route::post('/news/update/{id}', 'NewsController@update')->name('news.update');
               Route::get('/delete-news/{id}', 'NewsController@delete')->name('news.delete');


               Route::post('ckeditor', 'CkeditorFileUploadController@store')->name('ckeditor.upload');



               // Theme Settings
               Route::get('/theme', 'ThemeController@theme')->name('theme');
               Route::post('/theme/update/{id}', 'ThemeController@themeUpdate')->name('themeUpdate');

           });
           Route::get('/admin/logout', 'AdminLoginController@adminLogout')->name('adminLogout');
     });


