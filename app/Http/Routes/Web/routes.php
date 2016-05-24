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
//Route::get('email',function(){
//
//    ini_set("SMTP", "mail.property42.pk");
//    ini_set("sendmail_from", "info@property42.pk");
//
//    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";
//
//    $headers = "From: info@property42.pk";
//
//
//    mail("nomantufail100@gmail.com", "Testing", $message, $headers);
//    echo "Check your email now....<BR/>";
//});
//Route::get('f', function(){
//    Mail::send('welcome',[], function($message)
//    {
//        $message->from('info@property42.pk');
//        $message->to('nomantufail100@gmail.com', 'Noman Tufail' )->subject('Property42');
//    });
//});