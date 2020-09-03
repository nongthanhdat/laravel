<?php

namespace App\Repositories;

use App\Models\Category;


class CategoryRepository
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function create($attributes)
    {
        return $this->category->create($attributes);
    }

    public function all()
    {
        return $this->category->all();
    }

    public function find($id)
    {
        return $this->category->find($id);
    }

    public function update($id, array $attributes)
    {
        return $this->category->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->category->find($id)->delete();
    }
}
