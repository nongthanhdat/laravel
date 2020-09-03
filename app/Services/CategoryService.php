<?php

namespace App\Services;

use App\User;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryService
{
    public function __construct(CategoryRepository $category)
    {
     ->all();

        return $this->category->create($attributes);

    }   $this->category = $category ;
}

public function index()
{
    return $this->category->all();
}

public function create(Request $request)
{
    $attributes = $request

    public function read($id)
    {
        return $this->category->find($id);
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->all();

        return $this->category->update($id, $attributes);
    }

    public function delete($id)
    {
        return $this->category->delete($id);
    }
}
