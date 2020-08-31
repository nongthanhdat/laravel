<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    function checklogin(LoginFormRequest $request)
    {
//        $validator = Validator::make($request->all(), $message);
//        if ($validator->fails()) {
//            return redirect(route('main-login'))
//                ->withErrors($validator)
//                ->withInput();
//        }
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        if (Auth::attempt($user_data)) {
            return redirect(route('home'));
        } else {
            return back()->with('error', 'Wrong Login Details');
        }

    }

}

?>
