<?php

Route::group(['middleware'=>'Maintenance'],function (){
    Route::get('/','HomeController@homeView');
    Route::get('home','HomeController@homeView');
    Route::get('news','HomeController@newsView');
     Route::get('details/{id}','HomeController@detailView');
    Route::get('about',function (){
        return view('style.about');
    });
    Route::get('profile',function (){
        return view('style.profile');
    });
    Route::get('contact',function (){
        return view('style.contact');
    });
    Route::get('home3',function (){
        return view('style.home3');
    });
    Route::get('service','HomeController@service');
    Route::post('contactSend','HomeController@contactSend');
    Route::get('video','HomeController@video');
    Route::get('admin/home_site','HomeController@homeView');
});

Route::get('maintenance',function (){
    if(setting()->status == 'open'){
        return url('/');
    }else {
        return view('style.maintenance');
    }


});


