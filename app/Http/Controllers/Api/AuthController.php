<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthApiRequest;

class AuthController extends Controller
{
    public function login(AuthApiRequest $request) {

        $credentials = $request->only(['email', 'password']);

        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);

    }

    public function me() {

        return response()->json(auth()->guard('api')->user());

    }

    public function logout() {

        auth()->guard('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);

    }
    
    protected function respondWithToken($token) {

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60
        ]);

    }
}
