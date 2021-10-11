<?php

namespace App\Repositories;

use App\Models\Account;
use App\Models\Movement;
use App\Models\User;

class AccountRepository {

    public function findAccount($account, $agencyId) {

        $account = Account::where('number', $account)
                ->where('agency_id', $agencyId)
                ->first();
       
        return $account;

    }

    public function showBalance($userId) {

        return UserRepository::accountUser($userId);

    }

    public function withdraw($value, $userId) {

        $operation =  Movement::WITHDRAW;
        $account = UserRepository::accountUser($userId);

        if($account->balance < $value) {
            return response()->json(['error' => 'Transação não autorizada'], 401);
        }

        $account->balance = ($account->balance - $value);
        $account->save();

        MovementRepository::save($operation, $value, $account->id, $account->id);

        return response()->json(['message' => 'Transação realizada com sucesso'], 200);

    }

    public function deposit(Account $account, $value, $userId) {

        $operation =  Movement::DEPOSIT;
        $originAccount = UserRepository::accountUser($userId);

        $account->balance = ($account->balance + $value);
        $account->save();

        MovementRepository::save($operation, $value, $originAccount->id, $account->id);

        return response()->json(['message' => 'Transação realizada com sucesso'], 200);

    }

}