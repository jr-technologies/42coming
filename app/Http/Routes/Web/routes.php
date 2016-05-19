<?php


use Illuminate\Support\Facades\Mail;

Route::get('/', [
    'uses'=>'HomeController@comingSoon',
    'as' => 'home'
]);

Route::post('/register',
    [
        'middleware'=>'webValidate:registrationRequest',
        'uses'=>'Auth\AuthController@register',
        'as' => 'register'
    ]
);
Route::get('email',function(){

return view('email.welcome');
});