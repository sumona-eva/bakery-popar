<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required',
        ]);
        $customer = User::where('email',$request->email)->first();

        if(!$customer || !Hash::check($request->password, $customer->password)){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $customer->createToken('customer')->plainTextToken;

        return response()->json([
            'user' => $customer,
            'token' => $token
        ]);
    }
}
