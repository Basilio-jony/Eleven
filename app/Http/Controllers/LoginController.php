<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Mostrar o formulário de login
     */
    public function showLoginForm()
    {
        // Se já estiver autenticado, redireciona para o dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('login');
    }

    /**
     * Processar o login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required'    => 'O email é obrigatório.',
            'email.email'       => 'Introduza um email válido.',
            'password.required' => 'A palavra-passe é obrigatória.',
            'password.min'      => 'A palavra-passe deve ter pelo menos 6 caracteres.',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Regenera o ID de sessão por segurança
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        // Credenciais inválidas
        return back()
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => 'Email ou palavra-passe incorrectos.',
            ]);
    }

    /**
     * Terminar a sessão
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
