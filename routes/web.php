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
Route::post('/addProduct', 'ProductController@addProduct');
Route::post('/addCategoryInProduct', 'ProductController@addCategoryInProduct');
Route::delete('/deleteProduct/{id}', 'ProductController@deleteProduct');
Route::put('/updateProductRef', 'ProductController@updateProductRef');
Route::put('/updateProductDesignation', 'ProductController@updateProductDesignation');
Route::put('/updateProductQteAlert', 'ProductController@updateProductQteAlert');
Route::put('/updateProductCategory', 'ProductController@updateProductCategory');


Route::get('/category', 'CategoryController@index')->name('category');
Route::post('/addCategory', 'CategoryController@addCategory');
Route::delete('/deleteCategory/{id}', 'CategoryController@deleteCategory');
Route::put('/updateCategoryName', 'CategoryController@updateCategoryName');


Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::post('/addSupplier', 'SupplierController@addSupplier');
Route::delete('/deleteSupplier/{id}', 'SupplierController@deleteSupplier');
Route::put('/updateSupplierName', 'SupplierController@updateSupplierName');
Route::put('/updateSupplierEmail', 'SupplierController@updateSupplierEmail');
Route::put('/updateSupplierPhone', 'SupplierController@updateSupplierPhone');
Route::put('/updateSupplierAddress', 'SupplierController@updateSupplierAddress');


Route::get('/client', 'ClientController@index')->name('client');
Route::post('/addClient', 'ClientController@addClient');
Route::delete('/deleteClient/{id}', 'ClientController@deleteClient');
Route::put('/updateClientName', 'ClientController@updateClientName');
Route::put('/updateClientEmail', 'ClientController@updateClientEmail');
Route::put('/updateClientPhone', 'ClientController@updateClientPhone');
Route::put('/updateClientAddress', 'ClientController@updateClientAddress');


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