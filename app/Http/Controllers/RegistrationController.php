<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

class RegistrationController extends Controller
{
    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        //TODO: Add flash message that you are verified
        return redirect('/login');
    }
}
