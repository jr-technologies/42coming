<?php
/**
 * Created by PhpStorm.
 * User: JR Tech
 * Date: 3/21/2016
 * Time: 9:22 AM
 */

namespace App\Http\Validators\Validators\UserValidators;


use App\Http\Validators\Interfaces\ValidatorsInterface;


class AddUserValidator extends UserValidator implements ValidatorsInterface
{
    public function __construct($request){
        parent::__construct($request);
    }
    public function CustomValidationMessages(){
        return [
            'fName.required' => 'First name is required',
            'fName.alpha' => 'First name must contain letters.',
            'lName.required' => 'Last name is required',
            'lName.alpha' => 'Last name must contain letters.',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fName' => 'required | alpha|min:4',
            'lName' => 'required | alpha|min:4',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:5|alpha_dash'
        ];
    }
}