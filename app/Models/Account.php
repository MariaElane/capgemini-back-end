<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['number', 'balance', 'user_id', 'agency_id'];

    public function user() {

        return $this->hasOne('App\Models\User');

    }
}
