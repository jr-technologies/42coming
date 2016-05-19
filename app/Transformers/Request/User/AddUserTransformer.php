<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:54 PM
 */

namespace App\Transformers\Request\User;


use App\Transformers\Request\RequestTransformer;

class AddUserTransformer extends RequestTransformer{

    public function transform(){
        return [
            'lName'=>$this->request->input('l_name'),
            'fName'=>$this->request->input('f_name'),
            'email'=>$this->request->input('email'),
            'password'=>$this->request->input('password'),
        ];
    }
} 