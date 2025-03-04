<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class, "index"] )->name("products.index");
Route::post('/products', [ProductController::class, "store"] )->name("products.store");
Route::get('/products/create', [ProductController::class, "create"] )->name("products.create");
Route::get('/products/{id}', [ProductController::class, "show"] )->name("products.show");
Route::delete('/products/{id}', [ProductController::class, "destroy"] )->name("products.destroy");
Route::get('/products/{id}/update', [ProductController::class, "edit"] )->name("products.edit");
Route::put('/products/{id}', [ProductController::class, "update"] )->name("products.update");






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
