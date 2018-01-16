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

use Illuminate\Support\Facades\App;

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
        Route::post('/','ContactController@getContactUsForm');        //Kotakti POST

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


    App::setLocale('lv');

    Route::get('/admin', 'AdminController@index');

    /*Meņu labošana*/
    Route::get('/admin/izvelne', 'AdminMenuController@izvelne');
    Route::get('/admin/izvelne/{id}/labot', 'AdminMenuController@editMenu');       //Labot/apskatīt  vienu
    Route::patch('/admin/izvelne/{id}', 'AdminMenuController@updateMenu');         //Saglabā izmaiņas

    Route::get('/admin/submenu/{id}/labot', 'AdminMenuController@editSub');        //Labot/apskatīt  vienu SUB
    Route::patch('/admin/submenu/{id}', 'AdminMenuController@updateSub');       //Saglabā izmaiņas SUB

    /*Lapas visas*/
    Route::get('/admin/lapas', 'AdminLapaController@lapas');
    Route::get('/admin/lapas/{id}/labot', 'AdminLapaController@editLapa');       //Labot/apskatīt  vienu lapu
    Route::patch('/admin/lapas/{id}', 'AdminLapaController@updateLapa');         //Saglabā izmaiņas

    /*Rinda viena*/
    Route::get('/admin/lapas/{id}/rindas', 'AdminLapaController@rindas');       //Labot/apskatīt lapas rindas
    Route::get('/admin/rinda/{id}/labot', 'AdminLapaController@editRinda');       //Labot/apskatīt  vienu rindu
    Route::patch('/admin/rinda/{id}', 'AdminLapaController@updateRinda');         //Saglabā izmaiņas

    /*Kontakti*/
    Route::get('/admin/kontakti/{id}/labot', 'AdminLapaController@editKontakti');       //Labot/
    Route::patch('/admin/kontakti/{id}', 'AdminLapaController@updateKontakti');         //Saglabā izmaiņas

    /*Jautājumi*/
    Route::get('/admin/buj/{id}/labot', 'AdminLapaController@editBUJ');       //Labot/
    Route::patch('/admin/buj/{id}', 'AdminLapaController@updateBUJ');         //Saglabā izmaiņas

    /*Katalogs nosaukums*/
    Route::get('/admin/katalogs/{id}/labot', 'AdminLapaController@editKatalogs');       //Labot/
    Route::patch('/admin/katalogs/{id}', 'AdminLapaController@updateKatalogs');         //Saglabā izmaiņas

    /*Rekvizīti*/
    /*Route::get('/admin/uznemums', 'AdminLapaController@rekviziti');*/
    Route::get('/admin/uznemums/', 'AdminLapaController@editRekviziti');       //Labot/
    Route::patch('/admin/uznemums/{id}', 'AdminLapaController@updateRekviziti');         //Saglabā izmaiņas

    /*Galerija rindas nosaukums*/
    Route::get('/admin/galerija/{id}/labot', 'AdminLapaController@editGalerija');       //Labot/
    Route::patch('/admin/galerija/{id}', 'AdminLapaController@updateGalerija');         //Saglabā izmaiņas

    /*Galerija saturs - bildes*/
    Route::get('/admin/albums/{id}/labot', 'AdminGaleraController@editAlbums');     //Viena albuma labošana
    Route::delete('/admin/foto/{id}', 'AdminGaleraController@destroy');               //Viena foto dzēšana
    Route::post('/admin/foto/{foto}/add', 'GalerijaController@addPhoto');            //Augšuplādē vienu foto

    /*Video*/
    Route::patch('/admin/video/{id}', 'AdminLapaController@updateVideo');              //Video labošana

    /*Akcija*/
    Route::patch('/admin/akcija/{id}', 'AdminLapaController@updateAkcija');              //Video labošana

    /* Rindas foto*/
    Route::patch('/admin/rindafoto/{rinda}/foto', 'AdminLapaController@rindaFoto');     //Pielikt foto pie rindas
    Route::delete('/admin/rindafoto/{rinda}', 'AdminLapaController@delRindaFoto');      //Dzest foto pie rindas

    /* Kataloga foto*/
    Route::patch('/admin/katafoto/{katalog}/foto', 'AdminLapaController@kataFoto');     //Pielikt foto pie rindas
    Route::delete('/admin/katafoto/{katalog}', 'AdminLapaController@delKataFoto');      //Dzest foto pie rindas
});
