<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**\
     * Creates a user based on given criteria
     *
     * @param array $data
     * @return \App\Models\User
     */
    public function create(array $data)
    {
        return User::create($data);
    }
}
