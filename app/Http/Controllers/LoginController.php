<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;

use Auth;
use App\User;
use App\Events\Event;

class LoginController extends Controller
{
    public function login(Request $request) {

        if(Auth::check()) return redirect()->intended('eventlist');

        if($request->isMethod('post')) {

            $this->validate($request, [
                'email'    => 'required|email',
                'password' => 'required|max:30',
                'remember' => 'in:remember' // si checked = bonne valeur
            ]);
            $remember = $request->input('remember')? true : false;

            $credentials = $request->only('email', 'password');

            if(Auth::attempt($credentials, $remember)) {
                return redirect('eventlist');
            }
            else {
                return back()->withInput($request->only('email', 'remember'));
            }
        }
        else {
            return view('auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}