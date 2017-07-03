<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class userPasswordController extends Controller
{

    public function password()
    {
        return view('user.updatePassword');
    }

    public function updatePassword(Request $request)
    {
      $User=User::find(Auth::user()->id);
      if(Hash::check(Input::get('passwordold'),$User['password'])&&\Illuminate\Support\Facades\Input::get('password')==\Illuminate\Support\Facades\Input::get('password_confirmation')){
      $User->password=bcrypt(\Illuminate\Support\Facades\Input::get('password'));
      $User->save();
          Session::flash('message', "Password has been changed");
          return Redirect::back();

      }
      else{

          Session::flash('message', "Password has not been changed");
          return Redirect::back();

      }
    }
}
