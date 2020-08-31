<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $user = $this->userRepository->getAll();

        return view('admin.User.index', compact('user'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $post = $this->userRepository->create($data);

        return view('admin.User.index', compact('post'));
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return view('admin.User.index');
    }
}
