<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signUp(){
        return view('auth.signUp');
    }
    public function signIn(){
        return view('auth.signIn');
    }
    public function register(StoreUserRequest $request){
        User::create($request->all());
return redirect()->route('auth.signIn');
    }
    public function login(LoginUserRequest $request)
    {
if (!Auth::attempt($request->only('email', 'password'))) {
    return response()->json(['message' => 'Wrong password or email'], 401);
}

$user=User::query()->where('email',$request->email)->first();
$user->tokens()->delete();
return response()->json(['user'=>$user,'token'=>$user->createToken("Token :{$user->name}")->plainTextToken], 200);
    }
    public function logout(){

    }
}
