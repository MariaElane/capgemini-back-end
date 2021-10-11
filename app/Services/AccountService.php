<?php

namespace App\Services;

use App\Models\Account;
use App\Models\User;
use App\Repositories\AccountRepository;
use App\Repositories\MovementRepository;
use App\Repositories\UserRepository;

class AccountService {
    
    private $accountRepository;

    function __construct(AccountRepository $accountRepository) {

        $this->accountRepository = $accountRepository;

    }

    public function findAccount($account, $agencyId) {

        return $this->accountRepository->findAccount($account, $agencyId);
        
    }

    public function showBalance($userId) {

        return $this->accountRepository->showBalance($userId);
        
    }

    public function deposit(Account $account, $value, $userId) {

        return $this->accountRepository->deposit($account, $value, $userId);

    }

    public function withdraw($value, $userId) {

        return $this->accountRepository->withdraw($value, $userId);

    }

    public function getMovementsByUser(User $user) {

        return  MovementRepository::getMovementsByUser($user);

    }

}