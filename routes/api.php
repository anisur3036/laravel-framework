<?php

use Illuminate\Http\Request;


//buyers
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);

// category
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

//product
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

//Seller
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

//transictions
Route::resource('transictions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);

//user
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);


// Route::group(['middleware' => 'cors'], function() {
//    Route::post('/user','UserInfoController@store' );
// });
