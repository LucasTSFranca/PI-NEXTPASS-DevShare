
@extends('layouts.app_alt')
@section('title', 'Explorar - DevShare')
@section('body-class', 'explore-page')

@section('btn-sessao')
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-azul-claro  rounded-pill rounded  bi bi-person-plus-fill fs-6 text-decoration-none">Sair</button>
  </form>
   <a href="{{ route('profile') }}"><button type="button" class="btn btn-verde-claro  rounded-pill rounded  bi bi-person-plus-fill fs-6 text-decoration-none">Perfil</button></a>
@endsection

@section('conteudo')
<section class="explore-shell" aria-labelledby="explore-title">
    <header class="explore-heading">
        <i class="bi bi-compass-fill" aria-hidden="true"></i>
        <div>
            <h1 id="explore-title">Explorar</h1>
            <p>Descubra projetos incríveis da nossa comunidade!</p>
        </div>
    </header>

    <section class="explore-categories" aria-labelledby="category-title">
        <h2 class="explore-category-title" id="category-title">Navegue por categorias</h2>
        <div class="explore-category-buttons" aria-label="Categorias de projetos">
            <button type="button" class="explore-category-button" data-category="Desenvolvimento">
                <i class="bi bi-laptop" aria-hidden="true"></i>
                <span>Desenvolvimento</span>
            </button>
            <button type="button" class="explore-category-button" data-category="Jogos">
                <i class="bi bi-joystick" aria-hidden="true"></i>
                <span>Jogos</span>
            </button>
            <button type="button" class="explore-category-button" data-category="Design">
                <i class="bi bi-palette" aria-hidden="true"></i>
                <span>Design</span>
            </button>
            <button type="button" class="explore-category-button" data-category="Aplicativos">
                <i class="bi bi-phone" aria-hidden="true"></i>
                <span>Aplicativos</span>
            </button>
            <button type="button" class="explore-category-button" data-category="Web">
                <i class="bi bi-globe" aria-hidden="true"></i>
                <span>Web</span>
            </button>
            <button type="button" class="explore-category-button" data-category="Outros">
                <i class="bi bi-box" aria-hidden="true"></i>
                <span>Outros</span>
            </button>
        </div>
    </section>

    <section class="explore-featured" aria-labelledby="featured-title">
        <h2 class="explore-section-title" id="featured-title">
            <i class="bi bi-star-fill" aria-hidden="true"></i>
            Projetos em destaque
        </h2>

        <div class="explore-featured-layout">
            <div class="explore-project-grid" aria-label="Projetos em destaque">
                @for ($i = 0; $i < 3; $i++)
                    <a class="explore-project-card" href="#" aria-label="Abrir projeto em destaque {{ $i + 1 }}"></a>
                @endfor
            </div>

            <div class="explore-ad" aria-label="Espaço de anúncio">
                <span class="explore-ad-label"><i class="bi bi-megaphone-fill" aria-hidden="true"></i> Anúncio</span>
            </div>
        </div>
    </section>

    <section class="explore-recent" aria-labelledby="recent-title">
        <div class="explore-section-heading">
            <h2 class="explore-section-title" id="recent-title">
                <i class="bi bi-lightning-charge-fill" aria-hidden="true"></i>
                Projetos
            </h2>
        </div>

        <div class="explore-recent-layout">
            <div class="explore-project-grid explore-project-grid-recent" aria-label="Projetos recentes">
                @for ($i = 0; $i < 4; $i++)
                    <a class="explore-project-card" href="#" aria-label="Abrir projeto recente {{ $i + 1 }}"></a>
                @endfor
            </div>

            <div class="explore-ad explore-ad-small" aria-label="Espaço de anúncio">
                <span class="explore-ad-label"><i class="bi bi-megaphone-fill" aria-hidden="true"></i> Anúncio</span>
            </div>
        </div>
    </section>
</section>
@endsection