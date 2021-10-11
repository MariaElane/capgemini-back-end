<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest;
use App\Http\Resources\AccountResource;
use App\Http\Resources\MovementResource;
use App\Services\AccountService;
use App\Services\AgencyService;
use App\Services\UserService;
use Illuminate\Http\Request;

class AccountController extends Controller {

    protected $accountService;
    protected $userService;
    protected $agencyService;

    function __construct(AccountService $accountService, UserService $userService, AgencyService $agencyService) {

        $this->accountService = $accountService;
        $this->userService = $userService;
        $this->agencyService = $agencyService;
        
    }

    public function showBalance(Request $request) {

        $user = $this->userService->findUser($request->userId);

        if(!$user) {

            return response()->json(['error' => 'cliente não encontrado'], 404);

        }

        return new AccountResource($this->accountService->showBalance($user->id));

    }

    public function deposit(AccountRequest $request) {

        $value = $request->value; 
        $userId = $request->userId;

        $agency = $this->agencyService->findAgency($request->agency);
        if(!$agency) {

            return response()->json(['error' => 'Agência não encontrada'], 404);

        }

        $account = $this->accountService->findAccount($request->account, $agency->id);
        if(!$account) {

            return response()->json(['error' => 'Conta não encontrada'], 404);

        }

        return $this->accountService->deposit($account, $value, $userId);

    }

    public function withdraw(Request $request) {

        $value = $request->value;
        $userId = $request->userId;

        $return = $this->accountService->withdraw($value, $userId);

        return $return;

    }

    public function getMovementsByUser(Request $request) {

        $user = $this->userService->findUser($request->userId);

        if(!$user) {

            return response()->json(['error' => 'cliente não encontrado'], 404);

        }

        $movements = $this->accountService->getMovementsByUser($user);

        return MovementResource::collection($movements);

    }


}
