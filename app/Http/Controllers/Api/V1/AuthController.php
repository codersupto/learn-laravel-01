<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        sleep(5);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (!Auth::attempt($credentials)) {
            return 'supto';
        }
        return array_merge(
            Auth::user()->toArray(),
            ['theme' => Auth::user()->theme],
            ['access_key' => Auth::user()->createToken('test')->plainTextToken]
        );
    }
}
