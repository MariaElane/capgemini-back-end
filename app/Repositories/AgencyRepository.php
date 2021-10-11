<?php

namespace App\Repositories;

use App\Models\Agency;
use Illuminate\Support\Facades\DB;

class AgencyRepository {

    public function findAgency($agency) {
        
        $agency = Agency::where('number', $agency)->first();

        return $agency;

    }

}