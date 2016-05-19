<?php

namespace App\Listeners\Listeners\User;

use App\DB\Providers\SQL\Models\User;
use App\Events\Events\User\UserCreated;
use App\Libs\Json\Creators\Creators\User\UserJsonCreator;
use App\Listeners\Interfaces\ListenerInterface;
use App\Listeners\Listeners\Listener;
use App\Repositories\Repositories\Sql\UsersJsonRepository;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailToUser extends Listener implements ListenerInterface
{
    /**
     * @var $user User
     */
    public $user = null;
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return bool
     */
    public function handle(UserCreated $event)
    {
        $user = $event->user;

        Mail::send('email.welcome',['user' => $user], function($message) use($user)
        {
            $message->from(config('constants.REGISTRATION_EMAIL_FROM'));
            $message->to($user->email, $user->fName.''.$user->lName )->subject('Property42');
        });

    }
}
