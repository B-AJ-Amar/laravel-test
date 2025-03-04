<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, "showLoginForm"] )->name("auth.showLogin");
Route::get('/signup', [AuthController::class, "showRegistrationForm"] )->name("auth.showRegister");

Route::post('/login', [AuthController::class, "authenticate"] )->name("login");
Route::post('/signup', [AuthController::class, "register"] )->name("register");
Route::post('/logout', [AuthController::class, "logout"] )->name("logout");


Route::middleware('auth')->controller(ProductController::class)->group(function () {
    Route::get('/products', "index")->name("products.index");
    Route::post('/products', "store")->name("products.store");
    Route::get('/products/create', "create")->name("products.create");
    Route::get('/products/{id}', "show")->name("products.show");
    Route::delete('/products/{id}', "destroy")->name("products.destroy");
    Route::get('/products/{id}/edit', "edit")->name("products.edit");
    Route::put('/products/{id}', "update")->name("products.update");
});

// Route::middleware('auth')->group(function () {
//     Route::get('/products', [ProductController::class, "index"])->name("products.index");
//     Route::post('/products', [ProductController::class, "store"])->name("products.store");
//     Route::get('/products/create', [ProductController::class, "create"])->name("products.create");
//     Route::get('/products/{id}', [ProductController::class, "show"])->name("products.show");
//     Route::delete('/products/{id}', [ProductController::class, "destroy"])->name("products.destroy");
//     Route::get('/products/{id}/edit', [ProductController::class, "edit"])->name("products.edit");
//     Route::put('/products/{id}', [ProductController::class, "update"])->name("products.update");
// });




// ? ==========================================
// ? for test
// ? ==========================================

// Route::get('/items', function () {
//     $test_data = [
//         ['id'=>1,'name'=>'item 1'],
//         ['id'=>2,'name'=>'item 2'],
//         ['id'=>3,'name'=>'item 3'],
//     ];

//     return view('items.index',["title"=>"ITEMS TITLE", 'items'=>$test_data ]);
// });

// Route::get('/items/{id}', function (string $id) {

//     return view('items.item',);
// })->whereNumber('id');

// Route::get('/greeting', function () {
//     return 'Hello World';
// });
// Route::view('/welcome', 'welcome2');

// Route::get('/user/{id}', function (string $id) {
//     return "$id";
// })->where('id', '[0-9]+');

// Route::get('/user/{user}/{id}', function (string $id,string $user) {
//     return "$id : $user";
// })->where(['id'=>'[0-9]+','user'=>'[A-Za-z]+']);

// Route::get('/user/{user}/{id}', function (string $id,string $user) {
//     return "$id : $user";
// })->whereNumber('id')->whereAlpha('name');
// // ->whereUlid('id');
