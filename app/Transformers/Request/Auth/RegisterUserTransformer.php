<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:54 PM
 */

namespace App\Transformers\Request\Auth;


use App\Transformers\Request\RequestTransformer;

class RegisterUserTransformer extends RequestTransformer{

    public function transform(){
        return [
            'fName'=>$this->request->input('fName'),
            'lName'=>$this->request->input('lName'),
            'email'=>$this->request->input('email'),
            'password'=>$this->request->input('password'),
        ];
    }
} 