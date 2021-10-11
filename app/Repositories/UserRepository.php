<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {

    public function findUser($userId) {

        $user = User::where('id', $userId)->first();

        return $user;

    }

    public static function accountUser($userId) {

       $user = User::find($userId)->account;

       return $user;

    }

}