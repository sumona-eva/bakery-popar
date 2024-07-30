<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $request->user()->token()->delete();
        return response()->json([
           'status' => 'success',
            'message' => 'Successfully logged out'
        ],200);
    }
}
