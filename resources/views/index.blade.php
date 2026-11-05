@extends('layouts.app')
@section('title', 'DevShare')
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

          <div class="pesquisa-sup">
          <form class="d-flex banner-search-form text-light mx-lg-3 my-3 my-lg-0" role="search">
            <input class="form-control" type="search" placeholder="Pesquisar por pessoas, projetos, tags..." aria-label="Buscar"/>
          </form>
          </div>
        </div>
      
        <div class="col-12 col-md-8">
                  <div class="cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 w-100 h-auto m-0 p-2 p-md-3">
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-laptop fs-1"></i>Desenvolvimento</strong>
                      </div>
                  </div>

                  <div class="cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 w-100 h-auto m-0 p-2 p-md-3">
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-joystick fs-1"></i>Jogos</strong>
                      </div>
                  </div>

                  <div class="cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 w-100 h-auto m-0 p-2 p-md-3">
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-palette fs-1"></i>Design</strong>
                      </div>
                  </div>

                  <div class="cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 w-100 h-auto m-0 p-2 p-md-3">
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-phone fs-1"></i>Aplicativos</strong>
                      </div>
                  </div>

                  <div class="cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 w-100 h-auto m-0 p-2 p-md-3">
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-globe fs-1"></i>Web</strong>
                      </div>
                  </div>

                  <div class="cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 w-100 h-auto m-0 p-2 p-md-3">
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-box fs-1"></i>Outros</strong>
                      </div>
                  </div>
        </div>
        
  
@endsection