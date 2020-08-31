<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    function index()
    {
        return view('auth.register');
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    function checkregister(RegisterFormRequest $request)
    {
//        $input = $request->all();
//        $validator = Validator::make($input, $rules, $message);
//        if ($validator->fails()) {
//            return redirect(route('main-register'))
//                ->withErrors($validator)
//                ->withInput();
//        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        return redirect(route('home'));
    }
}

?>
