<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $fillable = ['operation', 'value', 'origin_account_id', 'destination_account_id'];

    const DEPOSIT = 'DEPOSITO';
    const WITHDRAW = 'SAQUE';
}
