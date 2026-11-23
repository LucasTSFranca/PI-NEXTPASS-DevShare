
@extends('layouts.app_alt')

@section('title', 'Meu perfil - DevShare')
@section('body-class', 'profile-page')

@section('btn-sessao')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-azul-claro rounded-pill rounded bi bi-person-plus-fill fs-6 text-decoration-none">
            Sair
        </button>
    </form>
@endsection

@section('conteudo')

<div class="profile-shell container-fluid px-3 px-lg-4">

    <section class="profile-hero" id="perfil" aria-labelledby="profile-name">

        <div class="profile-identity">

           
            <div class="profile-avatar-wrap">

                <img
                    class="profile-avatar"
                    src="{{ $user->avatar_photo
                        ? (str_starts_with($user->avatar_photo, 'images/')
                            ? asset($user->avatar_photo)
                            : asset('storage/' . $user->avatar_photo)
                          ) . '?v=' . ($user->updated_at?->timestamp ?? time())
                        : asset('images/user.png') }}"
                    alt="Foto de perfil de {{ $user->name }}"
                >

                <form
                    action="{{ route('profile.updateAvatar') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="form-foto-perfil"
                >
                    @csrf

                    <input
                        type="file"
                        name="avatar_photo"
                        id="avatar_photo"
                        accept="image/jpeg,image/png,image/gif,image/webp"
                        hidden
                        onchange="this.form.submit()"
                    >

                    <label for="avatar_photo" class="btn btn-azul-claro rounded-pill mt-2">
                        <i class="bi bi-camera-fill"></i>
                        Alterar foto
                    </label>

                    @error('avatar_photo')
                        <small class="text-danger d-block mt-1">
                            {{ $message }}
                        </small>
                    @enderror

                </form>

                @if(session('success'))
                    <div class="text-success mt-2">
                        {{ session('success') }}
                    </div>
                @endif

            </div>


            <div class="profile-intro">

                <span class="profile-eyebrow">
                    Seu espaço na comunidade
                </span>

                <h1 id="profile-name">
                    {{ $user->name }}
                    <i class="bi bi-patch-check-fill profile-verified"
                       aria-label="Perfil verificado"></i>
                </h1>

                <p class="profile-handle">
                    {{ '@' . $user->username }}
                </p>

                <p class="profile-bio">
                    Desenvolvedor em constante evolução.<br>
                    Criar, aprender e compartilhar. 🚀
                </p>

            </div>

        </div>

        <div class="profile-stats" aria-label="Estatísticas do perfil">

            <article class="profile-stat">
                <i class="bi bi-box profile-stat-icon" aria-hidden="true"></i>
                <div>
                    <strong>23</strong>
                    <span>Projetos</span>
                </div>
                <i class="bi bi-chevron-right profile-stat-arrow" aria-hidden="true"></i>
            </article>

            <article class="profile-stat">
                <i class="bi bi-people profile-stat-icon" aria-hidden="true"></i>
                <div>
                    <strong>1.2k</strong>
                    <span>Seguidores</span>
                </div>
                <i class="bi bi-chevron-right profile-stat-arrow" aria-hidden="true"></i>
            </article>

            <article class="profile-stat">
                <i class="bi bi-heart profile-stat-icon" aria-hidden="true"></i>
                <div>
                    <strong>5.8k</strong>
                    <span>Curtidas</span>
                </div>
                <i class="bi bi-chevron-right profile-stat-arrow" aria-hidden="true"></i>
            </article>

        </div>

    </section>

    </section>
@section('profile-content')
    <div class="profile-layout">

        <nav class="profile-sidebar" aria-label="Navegação do perfil">

            <a href="{{ route('home') }}" class="profile-menu-link">
                <i class="bi bi-house-door-fill" aria-hidden="true"></i>
                Início
            </a>

            <a href="#projetos" class="profile-menu-link">
                <i class="bi bi-folder2-open" aria-hidden="true"></i>
                Projetos
            </a>

            <a href="{{ route('publish') }}" class="profile-menu-link">
                <i class="bi bi-plus-circle-fill" aria-hidden="true"></i>
                Publicar projeto
            </a>

            <form action="{{ route('logout') }}" method="POST" class="profile-menu-form">
                @csrf
                <button type="submit" class="profile-menu-link">
                    <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
                    Sair
                </button>
            </form>

        </nav>
        <div class="profile-main-column">

            <section class="profile-panel" id="projetos" aria-labelledby="projects-title">

                <div class="profile-panel-heading">
                    <h2 id="projects-title">
                        <i class="bi bi-star-fill" aria-hidden="true"></i>
                        Meus projetos
                    </h2>

                    <button type="button">
                        Ver todos
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>

                <div class="profile-content-placeholder" aria-hidden="true"></div>

            </section>

            <section class="profile-panel profile-activity-panel" id="atividade" aria-labelledby="activity-title">

                <div class="profile-panel-heading">
                    <h2 id="activity-title">
                        <i class="bi bi-lightning-charge-fill" aria-hidden="true"></i>
                        Atividade recente
                    </h2>

                    <button type="button">
                        Ver tudo
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>

                <div class="profile-content-placeholder profile-activity-placeholder" aria-hidden="true"></div>

            </section>

        </div>

        <aside class="profile-aside" aria-label="Anúncios">

            <section class="profile-promo profile-promo-create">
                <span class="profile-promo-label">
                    <i class="bi bi-megaphone-fill" aria-hidden="true"></i>
                    Anúncio
                </span>
                <div class="profile-ad-space" aria-hidden="true"></div>
            </section>

            <section class="profile-promo profile-promo-community">
                <span class="profile-promo-label">
                    <i class="bi bi-megaphone-fill" aria-hidden="true"></i>
                    Anúncio
                </span>
                <div class="profile-ad-space" aria-hidden="true"></div>
            </section>

        </aside>

    </div>

</div>

@endsection
