<?php

namespace App\Repositories;

use App\User;

class UserRepository
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function all()
    {
        return $this->user->all();
    }

    public function save($data)
    {
        $user = new $this->user;

        $user->name = $data['name'];
        $user->email = $data['email'];

        $user->save();
        return $user->fresh();

    }

    public function find($id)
    {
        return $this->user->find($id);
    }

    public function update($data, $id)
    {

        $user = $this->user->find($id);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->update();

        return $user;
    }


    public function delete($id)
    {
        return $this->user->find($id)->delete();
    }

    //    public function create($attributes)
//    {
//        return $this->user->create($attributes);
//    }
//
//

//
//    public function update($id, array $attributes)
//    {
//        return $this->user->find($id)->update($attributes);
//    }

//    public function delete($id)
//    {
//        return $this->user->find($id)->delete();
//    }
}
