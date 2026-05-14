<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $token = auth('api')->attempt($credentials);

        if (!$token) {

            return response()->json([
                'error' => 'Invalid Credentials'
            ], 401);
        }

        return response()->json([
            'token' => $token
        ]);
    }
}