<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Web\WebController;
use App\Http\Requests\Requests\Auth\RegistrationRequest;
use App\Http\Responses\Responses\WebResponse;
use App\Libs\Auth\Web as Authenticator;
use App\Repositories\Repositories\Sql\UsersRepository;
use App\Transformers\Response\UserTransformer;


class AuthController extends WebController
{
    private $auth;
    private $users;
    private $userTransformer;
    public $response;
    public function __construct
    (
        WebResponse $response, Authenticator $authenticator,
        UsersRepository $usersRepository, UserTransformer $userTransformer
    )
    {
        $this->auth = $authenticator;
        $this->users = $usersRepository;
        $this->response = $response;
        $this->userTransformer = $userTransformer;
    }

    public function register(RegistrationRequest $request)
    {
        $user = $request->getUserModel();
        $user->id = $this->users->store($user);
        \Session::flash('success','Dear '.$user->fName.', you are registered successfully.');
        return redirect(route('home'));
    }
}
