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

Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

        Route::get('/', 'HomeController@index');
        Route::get('/home', 'HomeController@index');

        Route::get('/test', function()
        {
            return View::make('test');
        });

    });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Route::get('/welc', function () {
    return view('welcome');
});



/*Route::get('/panel', 'PanelController@index')->name('home');*/

Route::group(['middleware'=>['admin']], function(){


    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/lapas', 'AdminController@lapas');
    Route::get('/admin/galerijas', 'AdminController@galerijas');

    /*Meņu labošana*/
    Route::get('/admin/izvelne', 'AdminMenuController@izvelne');
    Route::get('/admin/izvelne/{id}/labot', 'AdminMenuController@editMenu');       //Labot/apskatīt  vienu
    Route::patch('/admin/izvelne/{id}', 'AdminMenuController@updateMenu');         //Saglabā izmaiņas

    Route::get('/admin/submenu/{id}/labot', 'AdminMenuController@editSub');        //Labot/apskatīt  vienu SUB
    Route::patch('/admin/submenu/{id}', 'AdminMenuController@updateSub');       //Saglabā izmaiņas SUB




});
