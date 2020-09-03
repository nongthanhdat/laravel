<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Services\CategoryService;

class CategoryController
{
    protected $categoryservice;

    public function __construct(CategoryService $categoryservice)
    {
        $this->categoryservice = $categoryservice;
    }
    public function index(){

        $cat = $this->categoryservice->index();

        return view('admin.Category.index', compact('cat'));
    }

    public function add()
    {
        return view('admin.Category.create');
    }

    public function edit()
    {
        return view('admin.Category.edit');
    }

    public function create(UserRequest $request)
    {

        $this->categoryservice->create($request);

        return back()->with(['status'=>'User created successfully']);
    }

    public function read($id)
    {

        $posts = $this->categoryservice->read($id);

        return view('admin.Category.edit', compact('posts'));

    }

    public function update(CategoryRequest $request, $id)
    {

        $user = $this->categoryservice->update($request, $id);

        return redirect()->back()->with('status', 'Post has been updated succesfully');
    }

    public function delete($id)
    {
        $this->categoryservice->delete($id);
        return back()->with(['status'=>'Deleted successfully']);
    }
}
