<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:54 PM
 */

namespace App\Transformers\Response;


use App\DB\Providers\SQL\Models\User;

class UserTransformer extends ResponseTransformer{


    /**
     * @param User $user
     * @return User
     */
    public function transform(User $user)
    {
        return $user;
    }
} 