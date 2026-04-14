<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Mostrar o formulário de registo
     */
    public function showRegisterForm()
    {
        // Se já estiver autenticado, redireciona para o dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('register');
    }

    /**
     * Processar o registo
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|min:3|max:100',
            'email'    => 'required|email|unique:users,email',
            'phone'    => 'nullable|string|max:20',
            'password' => 'required|min:8|confirmed',
        ], [
            'name.required'      => 'O nome é obrigatório.',
            'name.min'           => 'O nome deve ter pelo menos 3 caracteres.',
            'email.required'     => 'O email é obrigatório.',
            'email.email'        => 'Introduza um email válido.',
            'email.unique'       => 'Este email já está registado. Faça login.',
            'password.required'  => 'A palavra-passe é obrigatória.',
            'password.min'       => 'A palavra-passe deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'As palavras-passe não coincidem.',
        ]);

        // Criar utilizador
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // Fazer login automaticamente após registo
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
