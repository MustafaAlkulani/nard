<?php



Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Config::set('auth.defines','Admin');
    Route::get('login','AdminAuth@login');
    Route::post('login','AdminAuth@dologin');
         Route::get('forgot/password','AdminAuth@forgot_password');
    Route::post('forgot/password','AdminAuth@forgot_password_post');
    Route::get('reset/password/{token}','AdminAuth@reset_password');
    Route::post('reset/password/{token}','AdminAuth@reset_password_final');


    Route::group(['middleware'=>'Admin:admin'],function (){
       Route::resource('admin','AdminController');
       Route::delete('admin/destroy/all','AdminController@multe_delete');

        // Route::resource('contact','ContactUsController');
        // Route::delete('users/destroy/all','ContactUsController@multe_delete');

        // Route::resource('service','ServiceController');
        // Route::get('service/{id}/destroy','ServiceController@destroy');

        // Route::resource('postNews','PostNewsController');
        // Route::get('postNews/{id}/destroy','PostNewsController@destroy');
        // Route::resource('postVideo','PostVideoController');
        //  Route::post('postVideo/add','PostVideoController@store');

        // Route::get('postVideo/{id}/destroy','PostVideoController@destroy');
         
       
      
        

        Route::get('/home',function (){
            return view('admin.home');
        });
        Route::get('/',function (){
            return view('admin.home');
        });
        
       
      
        Route::resource('contact','ContactUsController');
        Route::delete('users/destroy/all','ContactUsController@multe_delete');

        Route::resource('service','ServiceController');
        Route::get('service/{id}/destroy','ServiceController@destroy');

        Route::resource('postNews','PostNewsController');
        Route::get('postNews/{id}/destroy','PostNewsController@destroy');

        Route::get('setting','SettingControllrt@setting');
        Route::post('setting','SettingControllrt@setting_save');


         Route::resource('postVideo','PostVideoController');
       //  Route::post('postVideo/add','PostVideoController@store');

        Route::get('postVideo/{id}/destroy','PostVideoController@destroy');
         

        Route::any('logout','AdminAuth@logout');
        Route::get('lang/{lang}',function (){
            $lang=request('lang');
           session()->has('lang')?session()->forget('lang'):'';
           $lang == 'ar'? session()->put('lang','ar'):session()->put('lang','en');
          return back();
        });

    });

});