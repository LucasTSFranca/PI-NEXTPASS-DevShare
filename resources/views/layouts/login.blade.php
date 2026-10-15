@extends('layouts.app')

@section('title', 'DevShare - Entrar')

@section('btn-sessao')
    <a href="{{ route('home') }}" class="btn btn-azul-claro rounded-pill text-decoration-none">
        <i class="bi bi-arrow-left me-1" aria-hidden="true"></i> Início
    </a>
@endsection

@section('conteudo')
    <section class="login-section d-flex justify-content-center align-items-center">
        <div class="login-card">
            <div class="text-center mb-4">
                <span class="login-eyebrow">Bem-vindo de volta</span>
                <h1 class="mt-2 mb-2">Entre na DevShare</h1>
                <p class="login-copy mb-0">Acesse sua conta para continuar compartilhando ideias.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}">
                @csrf

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
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Digite sua senha"
                        autocomplete="current-password"
                        required
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check mb-4">
                    <input id="remember" name="remember" type="checkbox" class="form-check-input" value="1">
                    <label for="remember" class="form-check-label">Manter conectado</label>
                </div>

                <button type="submit" class="btn login-submit w-100">Entrar</button>
            </form>

            <p class="text-center mt-4 mb-0">
                <a href="{{ route('home') }}" class="login-back-link">Voltar para a página inicial</a>
            </p>
        </div>
    </section>
@endsection