<?php

/*
|-------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
*/


Route::group(['middleware'=>['web']],function (){
    Route::get('/',function(){
        return view('welcome');
    });
  
    Route::get('about',function(){
        return view('about');
    });
    Route::get('contact', 'PageController@contact');
    Route::get('about', 'PageController@about');
    Route::get('service', 'PageController@service');
    Route::get('/allbuilding', 'Front@index');
    Route::get('forrent','Front@forrent');
    Route::get('forbuy','Front@forbuy');
    Route::get('house','Front@house');
    Route::get('villa','Front@villa');
    Route::get('summar','Front@summar');
    Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::get('/{id}/show','Front@show');
    Route::get('/search','Front@search');
    Route::post('storeContact','PageController@storeContact');
    Route::get('pageusers','UserController@pageUser');
    Route::get('addbuild/user','HomeController@create');
    Route::get('mybuild/{id}/show','HomeController@showMyBuild');
});
/*
|-------------------------------------------------------------------------
| Admin Routes
|-------------------------------------------------------------------------
*/
    Route::group(['middleware'=>'admin'],function(){
        Route::get('/admin','AdminController@index');
        Route::resource('admin/users','UserController');
        Route::get('admin/users/{id}/delete','UserController@destory');
        Route::resource('setting','SettingController');
        Route::post('adminpanel/setting','SettingController@store');
        Route::resource('bu','BuController');
        Route::get('bu/{id}/edit','BuController@edit');
        Route::post('bu/{id}/update','BuController@update');
        Route::get('bu/{id}/delete','BuController@destory');
        Route::get('contact/mail','PageController@contactAdminIndex');
        Route::get('contact/data','PageController@anyContact');
        Route::get('/images/{$image}',function($name){
            return public_path('images/'.$name); 
        });
        Route::get('/images/{$imageslider}',function($name){
            return public_path('images/slider/'.$name); 
        });
    });
