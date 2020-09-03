<?php

namespace App\Services;

use App\User;
use Exception;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository ;
    }

    public function index()
    {
        return $this->userRepository->all();
    }

    public function saveUserData($data)
    {
        $result = $this->userRepository->save($data);
        return $result;
    }

    public function updateUser($data, $id)
    {
        DB::beginTransaction();

        try {
            $user = $this->userRepository->update($data, $id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new Exception('Unable to update');
        }

        DB::commit();

        return $user;

    }

    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $user = $this->userRepository->delete($id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Unable to delete');
        }

        DB::commit();

        return $user;
    }

//    public function create(Request $request)
//    {
//        $attributes = $request->all();
//
//        return $this->user->create($attributes);
//
//    }
//
//    public function read($id)
//    {
//        return $this->user->find($id);
//    }
//
//    public function update(Request $request, $id)
//    {
//        $attributes = $request->all();
//
//        return $this->user->update($id, $attributes);
//    }
//
//    public function delete($id)
//    {
//        return $this->user->delete($id);
//    }
}
