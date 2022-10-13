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

Route::get('/', 'Web\IndexController@index')->name('index');

Route::get('/auth', 'Web\AuthController@auth')->name('auth')->middleware('guest');

Route::get('/registration', 'Web\RegistrationController@registration')->name('registration');

Route::get('/profile', 'Web\ProfileController@profile')->name('profile');

Route::get('/category/{slug}', 'Web\CategoriesController@category')->name('category');

Route::get('/product/{article}', 'Web\ProductsController@product')->name('product');

Route::get('/garage', 'Web\GarageController@garage')->name('garage');

Route::get('/forum', 'Web\ForumController@forum')->name('forum');

Route::get('/club', 'Web\ClubController@club')->name('club');

Route::get('/wishlist', 'Web\WishlistController@wishlist')->name('wishlist');

Route::get('/cart', 'Web\CartController@cart')->name('cart');

Route::get('/payment', 'Web\PaymentController@payment')->name('payment');

Route::get('/about', 'Web\AboutController@about')->name('about');

Route::get('/orderandpayment', 'Web\OrderandpaymentController@orderandpayment')->name('orderandpayment');

Route::get('/contacts', 'Web\ContactsController@contacts')->name('contacts');

Route::get('/documents', 'Web\DocumentsController@documents')->name('documents');

Route::group([
    'prefix' => 'auth', 'as' => 'auth.'
], function () {
    Route::get('/registration', 'Actions\AuthController@registration')->name('registration')->middleware('guest');
    Route::get('/login', 'Actions\AuthController@login')->name('login')->middleware('guest');
    Route::get('/logout', 'Actions\AuthController@logout')->name('logout')->middleware('auth');
});

Route::group([
    'prefix' => 'admin', 'as' => 'admin.'
], function () {
    Route::get('/main', 'Web\AdminController@main')->name('main');
});
