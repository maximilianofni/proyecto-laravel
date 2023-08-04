<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials =  $request->validate([
            'email' => ['required', 'email', 'string'],  
            'password' => ['required', 'string']
        ]);
    
       if( Auth::attempt($credentials) ){
            $request->session()->regenerate();
    
            return redirect()
            ->intended('dashboard')
            ->with('status', 'ha iniciado sesion'); 
       }
    
       throw ValidationException::withMessages([
            'email' => 'Estas credenciales no coinciden con nuestros registros'
       ]);    

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request-> session() -> invalidate();

        $request->session()->regenerateToken(); 

        return redirect()->to('/')->with('status', 'se ha cerrado sesion con exito');
    }

}
