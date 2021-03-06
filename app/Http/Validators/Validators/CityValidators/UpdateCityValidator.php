<?php
/**
 * Created by PhpStorm.
 * User: JR Tech
 * Date: 4/4/2016
 * Time: 4:15 PM
 */

namespace App\Http\Validators\Validators\CityValidators;


use App\Http\Validators\Interfaces\ValidatorsInterface;

class UpdateCityValidator extends CityValidator implements ValidatorsInterface
{
    public function __construct($request)
    {
        parent::__construct($request);
    }
    public function rules()
    {
        return[
            'id' => 'required',
            'name'=>'required',
            'country_id' => 'required'
        ];
    }
}

