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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/', 'HomeController@Login');
Route::any('/Login', 'HomeController@Login');

Route::get('setlocale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::group(['middleware' => 'usersession'], function () {
    Route::get('/Home', 'HomeController@Index');
    Route::get('/Home/ProductDetail/{cat}/{id}', 'HomeController@ProductDetail');
    Route::post('/Home/Getcards', 'HomeController@Getcards');
    Route::post('/Home/SendInterest', 'HomeController@SendInterest');  

    Route::any('/Products', 'ProductController@Index');
    Route::get('/Product/Detail/{id}', 'ProductController@Detail');
    Route::post('/ajaxLoadProductList', 'ProductController@ajaxLoadProductList');
    Route::get('/Contents', 'ContentController@Index');
    // Route::get('/Product/Detail', 'ProductController@Detail');
    Route::get('/Compare', 'CompareController@Index');
	Route::any('/Compare/AddCompare', 'CompareController@AddCompare');
    Route::get('/Compare/RemoveCompare/{id}', 'CompareController@RemoveCompare');
    Route::get('/Custom', 'CustomController@Index');
    Route::post('/ajaxModelValue', 'CustomController@ajaxLoadModel');
    Route::post('/ajaxModelYearValue', 'CustomController@ajaxLoadYearModel');

    Route::get('/Success', 'SuccessController@Index');

    Route::get('/Signin', 'SigninController@Index');
    Route::post('/Vertificate', 'SigninController@Vertificate');

    Route::post('/Renew', 'RenewController@Index');
    Route::get('/RenewSuccess', 'RenewController@Success');


    //template
    Route::any('/template/productcard', 'ProductController@TemplateCard');
});

