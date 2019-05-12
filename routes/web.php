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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/Earning', 'HomeController@Earning');


Route::get('/product', 'ProductController@index')->name('product');
Route::post('/addProduct', 'ProductController@addProduct')->name('product.add');
Route::delete('/deleteProduct/{id}', 'ProductController@deleteProduct')->name('product.delete');
Route::put('/updateProduct', 'ProductController@updateProduct')->name('product.update');


Route::get('/category', 'CategoryController@index')->name('category');
Route::post('/addCategory', 'CategoryController@addCategory')->name('category.add');
Route::delete('/deleteCategory/{id}', 'CategoryController@deleteCategory')->name('category.delete');
Route::put('/updateCategory', 'CategoryController@updateCategory')->name('category.update');


Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::post('/addSupplier', 'SupplierController@addSupplier')->name('supplier.add');
Route::delete('/deleteSupplier/{id}', 'SupplierController@deleteSupplier')->name('supplier.delete');
Route::put('/updateSupplier', 'SupplierController@updateSupplier')->name('supplier.update');


Route::get('/client', 'ClientController@index')->name('client');
Route::post('/addClient', 'ClientController@addClient')->name('client.add');
Route::delete('/deleteClient/{id}', 'ClientController@deleteClient')->name('client.delete');
Route::put('/updateClient', 'ClientController@updateClient')->name('client.update');



Route::get('/product-purchase', 'ProductPurchaseController@index')->name('product_purchase');
Route::post('/addProductPurchase', 'ProductPurchaseController@addProductPurchase');
Route::post('/addProductP', 'ProductPurchaseController@addProduct');


Route::get('/product-sale', 'ProductSaleController@index')->name('product_sale');
Route::post('/addProductSale', 'ProductSaleController@addProductSale');
Route::post('/addProductS', 'ProductSaleController@addProduct');

/*
Route::get('/operator', 'OperatorController@index')->name('operator');
Route::post('/addOperator', 'OperatorController@addOperator');
Route::delete('/deleteOperator/{id}', 'OperatorController@deleteOperator');
Route::put('/updateOperatorName', 'OperatorController@updateOperatorName');
*/

Route::get('/num-phone', 'Num_PhoneController@index')->name('num_phone');
Route::post('/addNumber', 'Num_PhoneController@addNumber');
Route::delete('/deleteNumber/{id}', 'Num_PhoneController@deleteNumber');
Route::put('/updateNumber', 'Num_PhoneController@updateNumber');
Route::put('/updateSolde', 'Num_PhoneController@updateSolde');
Route::put('/updateOperator', 'Num_PhoneController@updateOperator');


Route::get('/recharge-purchase', 'RechargePurchaseController@index')->name('recharge_purchase');
Route::post('/addRechargePurchase', 'RechargePurchaseController@addRechargePurchase');

Route::get('/recharge-sale', 'RechargeSaleController@index')->name('recharge_sale');
Route::post('/addRechargeSale', 'RechargeSaleController@addRechargeSale');


Route::get('/myprofile', 'MyProfileController@index')->name('myprofile');
Route::post('/updatePassword', 'MyProfileController@updatePassword');

Route::get('/invoice', 'InvoiceController@index')->name('invoice');
Route::post('/addInvoice', 'InvoiceController@addInvoice')->name('invoice');