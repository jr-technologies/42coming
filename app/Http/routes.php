<?php


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