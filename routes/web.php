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

//1.1 Diseases

Route::get('/foody/diseases', function () {
    return view('admin.categories.diseases.index');
})->name("categories.index");


Route::get('/foody/addDiseases', function () {
    return view('admin.categories.diseases.create');
})->name("categories.create");

Route::get('/foody/editDiseases', function () {
    return view('admin.categories.diseases.edit');
})->name("categories.edit");


//1.2 forbidden

Route::get('/foody/forbidden', function () {
    return view('admin.categories.forbidden.index');
})->name("forbidden.index");

Route::get('/foody/addForbidden', function () {
    return view('admin.categories.forbidden.create');
})->name("forbidden.create");

Route::get('/foody/editForbidden', function () {
    return view('admin.categories.forbidden.edit');
})->name("forbidden.edit");

//1.3 alternatives

Route::get('/foody/alternatives', function () {
    return view('admin.categories.alternatives.index');
})->name("alternatives.index");

Route::get('/foody/addAlternatives', function () {
    return view('admin.categories.alternatives.create');
})->name("alternatives.create");

Route::get('/foody/editAlternatives', function () {
    return view('admin.categories.alternatives.edit');
})->name("alternatives.edit");



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





