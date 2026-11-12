@extends('layouts.app')
@section('title', 'DevShare')
@section('body-class', 'index-page')
@section('btn-sessao')
    <a href="{{ route('register') }}" class="btn btn-azul-claro  rounded-pill rounded  bi bi-person-plus-fill fs-6 text-decoration-none"> Cadastrar</a>
    <a href="{{ route('login') }}" class="btn btn-verde-claro rounded-pill rounded bi bi-person-fill fs-6 text-decoration-none"> Login</a>
@endsection
@section('conteudo')
<section class="banner py-4 py-md-5">
        <div class="container-fluid px-3 px-md-4">
          <div class="row align-items-center">
            <div class="col-12 col-lg-8">
              <div class="d-none d-md-block">
                <img src="{{ asset('images/texto2.png') }}" class="txt-fruitger2 img-fluid banner-image" alt="Compartilhe seus projetos">
          </div>

         
        </div>
        </div>

        <div class="row">
          <div class="col-12">
            <section class="category-section" aria-labelledby="category-title">
              <h2 class="category-title" id="category-title">Navegue por categorias</h2>
              <div class="category-buttons" aria-label="Categorias de projetos">
                <button type="button" class="category-button">
                  <span class="category-button-top">
                    <i class="bi bi-laptop category-button-icon" aria-hidden="true"></i>
                    <span class="category-button-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                  </span>
                  <span class="category-button-label">Desenvolvimento</span>
                  <span class="category-button-meta">Explore projetos</span>
                </button>
                <button type="button" class="category-button">
                  <span class="category-button-top">
                    <i class="bi bi-joystick category-button-icon" aria-hidden="true"></i>
                    <span class="category-button-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                  </span>
                  <span class="category-button-label">Jogos</span>
                  <span class="category-button-meta">Explore projetos</span>
                </button>
                <button type="button" class="category-button">
                  <span class="category-button-top">
                    <i class="bi bi-palette category-button-icon" aria-hidden="true"></i>
                    <span class="category-button-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                  </span>
                  <span class="category-button-label">Design</span>
                  <span class="category-button-meta">Explore projetos</span>
                </button>
                <button type="button" class="category-button">
                  <span class="category-button-top">
                    <i class="bi bi-phone category-button-icon" aria-hidden="true"></i>
                    <span class="category-button-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                  </span>
                  <span class="category-button-label">Aplicativos</span>
                  <span class="category-button-meta">Explore projetos</span>
                </button>
                <button type="button" class="category-button">
                  <span class="category-button-top">
                    <i class="bi bi-globe category-button-icon" aria-hidden="true"></i>
                    <span class="category-button-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                  </span>
                  <span class="category-button-label">Web</span>
                  <span class="category-button-meta">Explore projetos</span>
                </button>
                <button type="button" class="category-button">
                  <span class="category-button-top">
                    <i class="bi bi-box category-button-icon" aria-hidden="true"></i>
                    <span class="category-button-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                  </span>
                  <span class="category-button-label">Outros</span>
                  <span class="category-button-meta">Explore projetos</span>
                </button>
              </div>
            </section>
          </div>
        </div>
      </div>

      <section class="project-showcase" aria-labelledby="project-showcase-title">
        <h2 class="project-showcase-title" id="project-showcase-title">Projetos em destaque</h2>
        <div class="project-showcase-cards" aria-label="Espaços para cards de projetos">
          <article class="project-card" aria-hidden="true"></article>
          <article class="project-card" aria-hidden="true"></article>
          <article class="project-card" aria-hidden="true"></article>
          <article class="project-card" aria-hidden="true"></article>
          <article class="project-card" aria-hidden="true"></article>
        </div>
      </section>
</section>
@endsection