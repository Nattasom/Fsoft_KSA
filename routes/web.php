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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode1 = Artisan::call('clear-compiled');
     //$exitCode = Artisan::call('compiled:clear');
    // return what you want
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});//package:discover

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

//Clear package discover:
Route::get('/package-discover', function() {
    $exitCode = Artisan::call('package:discover');
    return '<h1>package discover</h1>';
});

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
    Route::any('/Content', 'ContentController@Index');
    Route::any('/Content/More', 'ContentController@ajaxGetMoreContent');
    Route::any('/Contents/Detail/{id}', 'ContentController@Detail');
    // Route::get('/Product/Detail', 'ProductController@Detail');
    Route::get('/Compare', 'CompareController@Index');
	Route::any('/Compare/AddCompare', 'CompareController@AddCompare');
    Route::get('/Compare/RemoveCompare/{id}', 'CompareController@RemoveCompare');
    Route::any('/Custom', 'CustomController@Index');
    Route::post('/ajaxModelValue', 'CustomController@ajaxLoadModel');
    Route::post('/ajaxModelYearValue', 'CustomController@ajaxLoadYearModel');
    Route::post('/ajaxSubModelValue', 'CustomController@ajaxSubModelValue');
    Route::post('/ajaxGetPremiumRangeValue', 'CustomController@ajaxGetPremiumRangeValue');

    Route::get('/Success', 'SuccessController@Index');

    Route::get('/Signin', 'SigninController@Index');
    Route::post('/Vertificate', 'SigninController@Vertificate');

    Route::post('/Renew', 'RenewController@Index');
    Route::get('/RenewSuccess', 'RenewController@Success');


    //template
    Route::any('/template/productcard', 'ProductController@TemplateCard');
});

