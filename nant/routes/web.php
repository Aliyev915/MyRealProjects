<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::post('/locale',function(Request $request){
        Session::put('locale',$request->lang);
        return redirect()->back();
});

// client side
Route::get('/','HomeController@index');
Route::get('/haqqimizda','AboutController@index');
Route::get('/partnyorlar','PartnerController@index');
Route::get('/partnyor/{id}','PartnerController@detail');
Route::get('/vakansiyalar','VacancyController@index');
Route::get('/elaqe','ContactController@index');
Route::get('/qalareya','GalleryController@index');
Route::get('/proyektler','ProjectController@index');
Route::get('/aksiyalar','ActionController@index');
Route::post('/send','ApplyController@send');
Route::post('/sendmessage','MessageController@send');

// login
Route::get('/register','AccountController@signup');
Route::post('/register','AccountController@register');
Route::get('/login','AccountController@signin');
Route::post('/login','AccountController@login');
Route::get('/logout','AccountController@logout');

// admin panel
Route::prefix('admin-user')->middleware('checkUser')->group(function () {
    Route::get('/','DashboardController@index');

    // settings
    Route::get('/setting','SettingController@look');
    Route::post('/setting','SettingController@submit');

    // partners
    Route::prefix('partner')->group(function(){
        Route::get('/','PartnerController@all');
        Route::get('/create','PartnerController@create')->name('create-partner');
        Route::post('/create','PartnerController@store');
        Route::get('/edit/{id}','PartnerController@edit');
        Route::post('/edit/{id}','PartnerController@update');
        Route::get('/delete/{id}','PartnerController@delete');
    });

    // galleries
    Route::prefix('gallery')->group(function(){
        Route::get('/','GalleryController@all');
        Route::get('/create','GalleryController@create')->name('create-gallery');
        Route::post('/create','GalleryController@store');
        Route::get('/edit/{id}','GalleryController@edit');
        Route::post('/edit/{id}','GalleryController@update');
        Route::get('/delete/{id}','GalleryController@delete');
    });

    // counters

    Route::prefix('counter')->group(function(){
        Route::get('/','CounterController@index');
        Route::post('/','CounterController@submit');
    });

    Route::prefix('gallery-home')->group(function(){
        Route::get('/','HomeGalleryController@index');
        Route::get('/create','HomeGalleryController@create')->name('create-gallery-home');
        Route::post('/create','HomeGalleryController@store');
        Route::get('/edit/{id}','HomeGalleryController@edit');
        Route::post('/edit/{id}','HomeGalleryController@update');
        Route::get('/delete/{id}','HomeGalleryController@delete');
    });
    // projects
    Route::prefix('project')->group(function(){
        Route::get('/','ProjectController@all');
        Route::get('/create','ProjectController@create')->name('create-project');
        Route::post('/create','ProjectController@store');
        Route::get('/edit/{id}','ProjectController@edit');
        Route::post('/edit/{id}','ProjectController@update');
        Route::get('/delete/{id}','ProjectController@delete');
    });

    // actions
    Route::prefix('action')->group(function(){
        Route::get('/','ActionController@all');
        Route::get('/create','ActionController@create')->name('create-action');
        Route::post('/create','ActionController@store');
        Route::get('/edit/{id}','ActionController@edit');
        Route::post('/edit/{id}','ActionController@update');
        Route::get('/delete/{id}','ActionController@delete');
    });

    // vacancies
    Route::prefix('vacancy')->group(function(){
        Route::get('/','VacancyController@all');
        Route::get('/create','VacancyController@create')->name('create-vacancy');
        Route::post('/create','VacancyController@store');
        Route::get('/edit/{id}','VacancyController@edit');
        Route::post('/edit/{id}','VacancyController@update');
        Route::get('/delete/{id}','VacancyController@delete');
    });

    // distributions
    Route::prefix('distribution')->group(function(){
        Route::get('/','DistributionController@index');
        Route::get('/create','DistributionController@create')->name('create-distribution');
        Route::post('/create','DistributionController@store');
        Route::get('/edit/{id}','DistributionController@edit');
        Route::post('/edit/{id}','DistributionController@update');
        Route::get('/delete/{id}','DistributionController@delete');
    });

    //abouts
    Route::prefix('about')->group(function(){
        Route::get('/','AboutController@all');
        Route::get('/create','AboutController@create')->name('create-about');
        Route::post('/create','AboutController@store');
        Route::get('/edit/{id}','AboutController@edit');
        Route::post('/edit/{id}','AboutController@update');
        Route::get('/delete/{id}','AboutController@delete');
    });

    // contacts
    Route::prefix('contact')->group(function(){
        Route::get('/','ContactController@all');
        Route::get('/create','ContactController@create')->name('create-contact');
        Route::post('/create','ContactController@store');
        Route::get('/edit/{id}','ContactController@edit');
        Route::post('/edit/{id}','ContactController@update');
        Route::get('/delete/{id}','ContactController@delete');
    });


    // messages

    Route::get('/message','MessageController@index');
    Route::get('/message/detail/{id}','MessageController@detail');
    Route::get('/message/read/{id}','MessageController@read');
    Route::get('/message/delete/{id}','MessageController@delete');

    //applies
    Route::prefix('apply')->group(function(){
        Route::get('/','ApplyController@index');
        Route::get('/detail/{id}','ApplyController@detail');
        Route::get('/read/{id}','ApplyController@read');
        Route::get('/delete/{id}','ApplyController@delete');
    });

    Route::get('/user','UserController@index');
    Route::get('/user/activate/{id}','UserController@activate');
    Route::get('/user/delete/{id}','UserController@delete');
});
