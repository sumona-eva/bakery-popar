<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('user')->plainTextToken;

        $responseData = [
            'token' => $token,
            'uer' => $user
        ];

        return response()->json([
            'status' => 'success',
            'message' => 'Register successfully',
            'data' => $responseData
        ],200);
    }
}
