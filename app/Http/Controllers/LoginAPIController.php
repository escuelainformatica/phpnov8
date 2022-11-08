<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Sanctum\NewAccessToken;

class LoginAPIController extends Controller
{
    public function login(Request $request)
    {

        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
        } catch(\Exception $ex) {
            $credentials=[];
        }
        if (Auth::attempt($credentials)) {
            //$token = Str::random(60);
            /** @var NewAccessToken $token */
            $token = $request->user()->createToken('token',['server:admin']);


            return ['token' => $token->plainTextToken];
        }
        return "error";
    }
}
