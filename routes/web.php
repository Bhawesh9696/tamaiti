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

Route::group(['namespace'=>'Frontend', 'middleware'=>['guest']], function(){
    Route::get('/', 'LoginController@index');
});
Route::group(['namespace'=>'Frontend', 'middleware'=>['web']], function(){
//     Route::get('/', 'LoginController@index');
    Route::get('/login', 'LoginController@index')->name('site.login');
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login/attempt', 'LoginController@login_attempt')->name('site.login.attempt');
    Route::post('/register', 'RegistrationController@store')->name('site.register');
    Route::get('/verify/otp/{token}', 'RegistrationController@verify_token')->name('site.verify.token');
    Route::post('/verify/otp/{token}', 'RegistrationController@confirm_registration')->name('site.verify.token.update');
    Route::get('/logout', 'LoginController@logout')->name('site.logout');
    
    Route::group(['middleware'=>['auth']], function(){
        Route::get('/search', 'HomeController@index')->name('site.home');
        //Route::get('/search', 'HomeController@index')->name('site.search');
    });
});

Route::group(['prefix'=>'admin', 'middleware'=>['web']], function(){
    Route::get('/', 'AdminController@login');
    Route::post('/dashboard','AdminController@adminLogin')->name('dashboard');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard1');
    Route::get('/sign_up', 'AdminController@sign_up')->name('sign_up');
    //Route::get('auth/logout', 'Auth\LoginController@logout');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    
    Route::group(['middleware'=>['auth']], function(){
        Route::get('/add-popular-number', 'AdminController@addPopularNumber')->name('add_popular_number');
        Route::post('import', 'StudentController@import')->name('import');
        Route::get('/popularNumberEdit/{id}', 'AdminController@popularNumberEdit')->name('popularNumberEdit');
        Route::post('/catalogue/{id}', 'AdminController@catalogueUpdate')->name('catalogueUpdate');
        Route::get('/popular-number-list', 'AdminController@popularNumberList')->name('popular_number_list');
        Route::get('/user-list', 'AdminController@userList')->name('user_list');
        Route::get('/popularNumberDelete/{id}','AdminController@popularNumberDelete')->name('popularNumberDelete');
        Route::get('/changePassword', 'AdminController@changePassword')->name('change_passsword');
        Route::post('/changePasswordSuccessfully','AdminController@changePasswordSuccessfully')->name('changePasswordSuccessfully');
    });
});

Route::get('send-mail','MailSend@mailsend');

#Route::get('auth/logout', 'Auth\LoginController@logout');


/*
Route::get('/excel', 'StudentController@index')->name('index');
Route::post('import', 'StudentController@import')->name('import');

Route::post ( '/login', 'RegistrationController@login' );
Route::post ( '/register', 'RegistrationController@register' );
Route::get ( '/logout', 'RegistrationController@logout' );

Route::post ( '/verifyOtp', 'RegistrationController@verifyOtp')->name('verifyOtp');

Route::post('forgotPassword','RegistrationController@forgotPassword');
Route::get('forgotSuccess','RegistrationController@forgotSuccess'); 
*/
/*
|--------------------------------------------------------------------------
|Start Admin Panel Management 
|--------------------------------------------------------------------------
*/
/*
Route::get('/', 'AdminController@login');
Route::post('DashboardLogin','AdminController@adminLogin');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/sign_up', 'AdminController@sign_up')->name('sign_up');
Route::get('auth/logout', 'Auth\LoginController@logout');
*/

/*
|--------------------------------------------------------------------------
|Start User Panel Management 
|--------------------------------------------------------------------------
*/
/*
Route::get('/home', 'UserController@home');
Route::get('/sign','UserController@sign');
Route::get('/verification', 'UserController@verification')->name('verification');
Route::get('/forget','UserController@forget')->name('forget');
//Route::get('auth/logout', 'Auth\LoginController@logout');

Route::post('/saveUserRegistration', 'UserController@saveUserRegistration')->name('saveUserRegistration');
Route::post('/UserLogin', 'UserController@UserLogin')->name('UserLogin');
*/
/*
|--------------------------------------------------------------------------
|Start Most Popular Number   Management System
|--------------------------------------------------------------------------
*/
/*
Route::get('/add-popular-number', 'AdminController@addPopularNumber')->name('add_popular_number');
Route::post('/save-popular-number', 'AdminController@savePopularNumber');
Route::get('/popular-number-list', 'AdminController@popularNumberList')->name('popular_number_list');
Route::get('/update-popular-number', 'AdminController@updateServices')->name('update_popular_number');
Route::get('/popularNumberUpdate/{id}','AdminController@popularNumberUpdate');
Route::post('popularNumberEdit/{id}','AdminController@popularNumberEdit');
Route::get('popularNumberDelete/{id}','AdminController@popularNumberDelete');
Route::get('popularNumberStatus/{id}','AdminController@popularNumberStatus'); 
/*

/*
|--------------------------------------------------------------------------
|Start Miscellaneous Management System 
|--------------------------------------------------------------------------
*/
/*
Route::get('changePassword', 'AdminController@changePassword')->name('change_passsword');
Route::post('changePasswordSuccessfully','AdminController@changePasswordSuccessfully');

/*
|--------------------------------------------------------------------------
|Registration System 
|--------------------------------------------------------------------------
*/



