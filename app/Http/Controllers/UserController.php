<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Exception;
use App\Http\Requests\UserRequest;
use App\Services\UserService;

class UserController
{
    protected $userService;

    /**
     * PostController Constructor
     *
     * @param UserService $userService
     *
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index(){

        $user = $this->userService->index();

        return view('admin.User.index', compact('user'));
    }

    public function edit()
    {
        return view('admin.User.edit');
    }

    public function add()
    {
        return view('admin.User.create');
    }

    public function store(Request $request)
    {
        $data = $request ->only([
           'name',
           'email',
        ]);
        $result['data'] = $this->userService->saveUserData($data);
        return redirect()->route('admin.User.index');

    }

    public function update(Request $request, $id)
    {
        $data = $request->only([
            'name',
            'email'
        ]);
        $user = $this->userService->updateUser($data, $id);
        return view('admin.User.index', compact('user'));

    }

    public function destroy($id)
    {

        $this->userService->deleteById($id);
        return back();
    }


//    public function create(UserRequest $request)
//    {
//
//        $this->userservice->create($request);
//
//        return back()->with(['status'=>'User created successfully']);
//    }
//
//    public function read($id)
//    {
//
//        $posts = $this->userservice->read($id);
//
//        return view('edit', compact('posts'));
//
//    }
//
//    public function update(UserRequest $request, $id)
//    {
//
//        $user = $this->userservice->update($request, $id);
//
//        return redirect()->back()->with('status', 'Post has been updated succesfully');
//    }
//
//    public function delete($id)
//    {
//        $this->userservice->delete($id);
//
//        return back()->with(['status'=>'Deleted successfully']);
//    }
}
