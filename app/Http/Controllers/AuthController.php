<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember'); 

        // Adicionamos 'is_active' => true para impedir login de contas desativadas
        $attemptCredentials = [
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'is_active' => true,
        ];

        // verifica as info no banco e tenta logar
        if (Auth::attempt($attemptCredentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        // exibe o erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas são inválidas ou sua conta está desativada.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'], // 'confirmed' se tiver um input password_confirmation
            'birth_date' => ['nullable', 'date'],
            'phone_number' => ['nullable', 'string', 'max:20'],
        ]);

        // Cria o usuário com os novos campos da migration e model
        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // O cast 'hashed' do model já cuida disso, mas o Hash::make é seguro manter
            'birth_date' => $validated['birth_date'] ?? null,
            'phone_number' => $validated['phone_number'] ?? null,
            'registration_date' => now(), // Preenche a data de cadastro automaticamente
            'is_active' => true,         // Garante que nasce ativo
            'is_admin' => false,         // Padrão comum
            'is_premium' => false,       // Padrão comum
        ]);

        // Redireciona de volta para fazer o login
        return redirect()->route('login')->with('success', 'Conta criada com sucesso! Faça o login.');
    }
}