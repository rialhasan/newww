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

// Route::get('/', function () {
//     return view('welcome');
// });


// Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@frontend')->name('front');
Route::get('/product/cart', 'FrontendController@SingleCart')->name('SingleCart');
Route::get('/product/{slug}/', 'FrontendController@singleproduct')->name('singleproduct');
Route::group(['middleware' => 'auth'], function(){
Route::get('/category/form', 'CategoryController@categoryform')->name('categoryform');
Route::post('/category/insert', 'CategoryController@categoryinsert')->name('categoryinsert');
Route::get('/category/view', 'CategoryController@categoryview')->name('categoryview');
Route::get('/category/categorydelete/{id}', 'CategoryController@categorydelete')->name('categorydelete');
Route::get('/category/categorytrash', 'CategoryController@categoryTrash')->name('categoryTrash');
Route::get('/category/fordelete/{id}', 'CategoryController@forDelete')->name('forDelete');
Route::get('/category/categoryedit/{id}', 'CategoryController@categoryEdit')->name('categoryEdit');
Route::post('/category/categoryupdate', 'CategoryController@categoryUpdate')->name('categoryUpdate');
Route::get('/category/categoryrestore/{id}', 'CategoryController@categoryRestore')->name('categoryRestore');


//Color Controller
Route::get('/admin/color', 'ColorController@color')->name('color');
Route::post('/admin/color/post', 'ColorController@colorPost')->name('colorPost');

//Product Controller
Route::get('/admin/product', 'ProductController@product')->name('product');
Route::post('/admin/productpost', 'ProductController@productPost')->name('productPost');
Route::get('/admin/product/list', 'ProductController@productList')->name('productList');
Route::get('/admin/product/edit/{id}', 'ProductController@productEdit')->name('productEdit');
Route::post('/admin/product/update', 'ProductController@productUpdate')->name('productUpdate');

});

Auth::routes(['verify' => true]);

Route::get('admin/subcategory', 'SubCategoryController@SubCategory')->name('SubCategory');
Route::post('admin/subcategory/list', 'SubCategoryController@SubCategoryList')->name('SubCategoryList');
Route::get('admin/subcategory/view', 'SubCategoryController@SubCategoryView')->name('SubCategoryView');
