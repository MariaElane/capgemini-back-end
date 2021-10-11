<?php

namespace App\Repositories;

use App\Models\Movement;
use App\Models\User;

class MovementRepository {

    public static function save($operation, $value, $originAccountId, $destinationAccountId) {

        Movement::create([
            'operation' => $operation,
            'value' => $value,
            'origin_account_id' => $originAccountId,
            'destination_account_id' => $destinationAccountId,
        ]);
        
    }

    public static function getMovementsByUser(User $user) {

        $movements = Movement::where('origin_account_id', $user->id)->orderBy('created_at', 'DESC')->get();

        return $movements;

    }

   

}