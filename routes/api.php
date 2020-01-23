<?php

use Illuminate\Http\Request;


//buyers
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);
Route::resource('buyers.transactions', 'Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::resource('buyers.products', 'Buyer\BuyerProductController', ['only' => ['index']]);
Route::resource('buyers.categories', 'Buyer\BuyerCategoryController', ['only' => ['index']]);

// category
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);
Route::resource('categories.products', 'Category\CategoryProductController', ['only' => ['index']]);
Route::resource('categories.buyers', 'Category\CategoryBuyerController', ['only' => ['index']]);
Route::resource('categories.sellers', 'Category\CategorySellerController', ['only' => ['index']]);
Route::resource('categories.transactions', 'Category\CategoryTransactionController', ['only' => ['index']]);

//product
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

//Seller
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

//transictions
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);
Route::resource('transactions.categories', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::resource('transactions.sellers', 'Transaction\TransactionSellerController', ['only' => ['index']]);

//user
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);


// Route::group(['middleware' => 'cors'], function() {
//    Route::post('/user','UserInfoController@store' );
// });
