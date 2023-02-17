<?php

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
    return view('admin.dashboard');
})->name('dashboard.index');


//Route Meals
Route::get('/foody/meals', function () {
    return view('admin.meals.index');
})->name("meals.index");


Route::get('/foody/addMeals', function () {
    return view('admin.meals.create');
})->name("meals.create");

Route::get('/foody/editMeals', function () {
    return view('admin.meals.edit');
})->name("meals.edit");

//Route challenges

Route::get('/foody/challenges', function () {
    return view('admin.challenges.index');
})->name("challenges.index");


Route::get('/foody/addChallenges', function () {
    return view('admin.challenges.create');
})->name("challenges.create");

Route::get('/foody/editChallenges', function () {
    return view('admin.challenges.edit');
})->name("challenges.edit");


//Route categories

Route::get('/foody/categories', function () {
    return view('admin.categories.index');
})->name("categories.index");


Route::get('/foody/addCategories', function () {
    return view('admin.categories.create');
})->name("categories.create");

Route::get('/foody/editCategories', function () {
    return view('admin.categories.edit');
})->name("categories.edit");

//Route orders

Route::get('/foody/orders', function () {
    return view('admin.orders.index');
})->name("orders.index");


Route::get('/foody/order-details', function () {
    return view('admin.orders.order-details');
})->name("orders.order-details");


//Route  messages

Route::get('/foody/messages', function () {
    return view('admin.messages.index');
})->name("messages.index");





