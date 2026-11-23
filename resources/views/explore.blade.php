@extends('layouts.app')

@section('title', 'Explorar - DevShare')
@section('body-class', 'explore-page')

@section('btn-sessao')
    <a href="{{ route('login') }}" class="btn btn-azul-claro rounded-pill bi bi-person-fill fs-6 text-decoration-none">
         Entrar
    </a>
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
            @foreach ($categories as $category)
                <button type="button" class="explore-category-button" data-category="{{ $category->name }}">
                    <i class="bi bi-tag-fill" aria-hidden="true"></i>
                    <span>{{ $category->name }}</span>
                </button>
            @endforeach
        </div>
    </section>

    <section class="explore-featured" aria-labelledby="featured-title">
        <h2 class="explore-section-title" id="featured-title">
            <i class="bi bi-star-fill" aria-hidden="true"></i>
            Projetos em destaque
        </h2>

        <div class="explore-featured-layout">
            <div class="explore-project-grid" aria-label="Projetos em destaque">
                @forelse ($featuredPublications as $publication)
                    <article class="explore-project-card" data-category="{{ $publication->category?->name }}">
                        <img
                            class="explore-project-image"
                            src="{{ str_starts_with($publication->image, 'images/')
                                ? asset($publication->image)
                                : asset('storage/' . ltrim($publication->image, '/')) }}"
                            alt="Imagem do projeto {{ $publication->title }}"
                        >
                        <div class="explore-project-info">
                            <strong>{{ $publication->title }}</strong>
                            <span>{{ $publication->category?->name ?? 'Sem categoria' }}</span>
                        </div>
                    </article>
                @empty
                    <p class="explore-empty">Nenhum projeto publicado ainda.</p>
                @endforelse
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
                @forelse ($recentPublications as $publication)
                    <article class="explore-project-card" data-category="{{ $publication->category?->name }}">
                        <img
                            class="explore-project-image"
                            src="{{ str_starts_with($publication->image, 'images/')
                                ? asset($publication->image)
                                : asset('storage/' . ltrim($publication->image, '/')) }}"
                            alt="Imagem do projeto {{ $publication->title }}"
                        >
                        <div class="explore-project-info">
                            <strong>{{ $publication->title }}</strong>
                            <span>{{ $publication->category?->name ?? 'Sem categoria' }}</span>
                        </div>
                    </article>
                @empty
                    <p class="explore-empty">Nenhum projeto publicado ainda.</p>
                @endforelse
            </div>

            <div class="explore-ad explore-ad-small" aria-label="Espaço de anúncio">
                <span class="explore-ad-label"><i class="bi bi-megaphone-fill" aria-hidden="true"></i> Anúncio</span>
            </div>
        </div>
    </section>
</section>
@endsection