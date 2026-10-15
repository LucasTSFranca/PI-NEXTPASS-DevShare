<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //tela de login
    public function showLogin()
    {
        return view('login');
    }
    //tela home-inicio
    public function showHome()
    {
        return view('home');
    }

        //Isso é pra tela de cadastro, quando vc fizer manda a rota pra cá
    public function showCadastro()
    {
        return view('cadastro');
    }

    // Processa o login
    public function login(Request $request)
    {
        // Valida os campos o mesmo que tava faz na route anteriormente
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember'); // Essa bomba é para manter conctado cuidado

        // verifica as info no banco e tenta logar
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Redireciona para a pagina(por enquanto vai pra home msm)
            return redirect()->intended('home');
        }

        // exibe o erro
        return back()->withErrors([
            'email' => 'Erro ao tentar fazer login.',
        ])->onlyInput('email');
    }



    // controle de cadastro
    public function cadastro(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'], 
        ]);

        // Cria o usuário com a senha ja no hash
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

            //to mandando de volta para fazer o login
        return redirect()->route('login');
    }

}
