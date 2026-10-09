@extends('layouts.app')
@section('title', 'DevShare')
@section('conteudo')
<section class="banner py-4 py-md-5">
        <div class="container-fluid px-3 px-md-4">
          <div class="row align-items-center">
            <div class="col-12 col-lg-8">
              <div class="d-none d-md-block">
                <img src="{{ asset('images/textos.png') }}" class="txt-fruitger img-fluid" alt="Compartilhe seus projetos">
                <div class="exp d-flex flex-column flex-sm-row gap-3">
                  <button type="button" class="btn-pst">Poste seu projeto <i class="bi bi-arrow-right fm-4"></i></button>
                  <button type="button" class="btn-exp">Explore projetos</button>
                </div>
              </div>
              <div class="d-flex d-md-none flex-column align-items-center gap-4 text-center">
                <div class="mx-n3 w-100">
                  <img src="{{ asset('images/textos.png') }}" class="img-fluid w-100" alt="Compartilhe seus projetos">
                </div>
                <div class="d-grid gap-3 w-100">
                  <button type="button" class="btn-pst w-100 mw-100">Poste seu projeto <i class="bi bi-arrow-right fm-4"></i></button>
                  <button type="button" class="btn-exp w-100 mw-100">Explore projetos</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>

      <section class="container-fluid px-3 px-md-4 py-4">
        <div class="row">
          <div class="col-12">
            <div class="explicar w-100 h-auto p-3 p-md-4">
              <div class="row align-items-center g-4">
                <div class="col-12 col-md-4">
                  <div class="expl-text ms-0 mt-2 mt-md-3">
                    <h3><strong>Por quê compartilhar?</strong><br></h3>
                    <h5>Aqui, o seu projeto encontra<br> pessoas que entendem</h5>
                  </div>
                </div>

                <div class="col-12 col-md-8">
                  <div class="cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 w-100 h-auto m-0 p-2 p-md-3">
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-rocket-takeoff-fill fs-1"></i>Ganhe Visibilidade</strong>
                    </div>
                  </div>
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-chat-dots fs-1"></i>Receba Feedbacks</strong>
                    </div>
                  </div>
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-share fs-1"></i>Conecte-se</strong>
                    </div>
                  </div>
                      <div class="col"><div class="card card-text ratio ratio-1x1 d-flex justify-content-center align-items-center text-center">
                        <strong class="d-flex flex-column justify-content-center align-items-center text-center w-100 h-100 gap-2"><i class="bi bi-star fs-1"></i>Explore novas ideias</strong>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
@endsection