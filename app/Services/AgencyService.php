<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\AgencyRepository;

class AgencyService {
    
    private $agencyRepository;

    function __construct(AgencyRepository $agencyRepository) {

        $this->agencyRepository = $agencyRepository;

    }

    public function findAgency($agency) {

        return $this->agencyRepository->findAgency($agency);
        
    }

}