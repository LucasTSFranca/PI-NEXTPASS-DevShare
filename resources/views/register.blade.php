@extends('layouts.app')

@section('title', 'DevShare - Cadastrar')

@section('btn-sessao')
    <a href="{{ route('login') }}" class="btn btn-azul-claro rounded-pill bi bi-person-fill fs-6 text-decoration-none">
         Entrar
    </a>
    </a>
@endsection

@section('conteudo')
    <section class="login-section d-flex justify-content-center align-items-center">
        <div class="login-card">
            <div class="text-center mb-4">
                <span class="login-eyebrow">Bem-vindo</span>
                <h1 class="mt-2 mb-2">Cadastre-se na DevShare</h1>
                <p class="login-copy mb-0">Crie sua conta para começar a compartilhar ideias.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        placeholder="Seu nome"
                        autocomplete="name"
                        required
                        autofocus
                    >
                    @error('nome')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        placeholder="voce@exemplo.com"
                        autocomplete="email"
                        required
                        autofocus
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        minlength="8"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Digite sua senha"
                        required
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="birth_date" class="form-label">Data de Nascimento</label>
                    <input
                        id="birth_date"
                        name="birth_date"
                        type="date"
                        class="form-control @error('birth_date') is-invalid @enderror"
                        value="{{ old('birth_date') }}"
                        placeholder="00/00/0000"
                        required
                    >
                    @error('birth_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Telefone</label>
                    <input
                        id="phone"
                        name="phone"
                        type="text"
                        class="form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone') }}"
                        placeholder="(00) 00000-0000"
                        maxlength="11"
                        required
                    >
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div> 
                    @enderror
</div>
                

                <button type="submit" class="btn login-submit w-100">Cadastrar</button>
            </form>

            <p class="text-center mt-4 mb-0">
                <a href="{{ route('home') }}" class="login-back-link">Voltar para a página inicial</a>
            </p>
        </div>
    </section>
@endsection