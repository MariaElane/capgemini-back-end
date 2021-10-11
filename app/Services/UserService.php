<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Request;

class UserService {
    
    private $userRepository;

    function __construct(UserRepository $userRepository) {

        $this->userRepository = $userRepository;

    }

    public function findUser($userId) {

        return $this->userRepository->findUser($userId);
        
    }


}