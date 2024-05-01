<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Adldap\Laravel\Facades\Adldap;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function ldapAuthenticate(Request $request)
    {
        // Validar las credenciales del usuario
        $credentials = $request->only('email', 'password');

        // Autenticar al usuario con LDAP
        if (Adldap::auth()->attempt($credentials['email'], $credentials['password'])) {
            // Autenticación exitosa
            return redirect()->intended('/'); // Redireccionar a la página de inicio
        } else {
            // Autenticación fallida
            return back()->withInput()->withErrors(['email' => __('Estas credenciales no coinciden con nuestros registros.')]);
        }
    }
}
