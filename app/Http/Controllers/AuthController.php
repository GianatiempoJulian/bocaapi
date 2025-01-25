<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\User;
use \stdClass;


class AuthController extends Controller {

    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'username' => 'required|string|max:255',
            'email'=>'required|string|email|max:255',
            'password'=>'required|string'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['data'=>$user,'access_token'=>$token,'token_type'=>'Bearer']);
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
    
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
    
        return response()->json([
            'message' => 'Login successfully',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function logout(Request $request){
        $user = auth()->user();

        if ($user) {
            $user->tokens()->delete();
            return response()->json(['message' => 'Session and token deleted'], 200);
        }

        return response()->json(['message' => 'No authenticated user found'], 401);
    }
}


?>