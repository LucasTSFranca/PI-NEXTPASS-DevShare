<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevShare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    

</head>
<body>
   
    <header>

    <!--Cabeçalho-->

    <nav class="navbar navbar-expand-lg navbar-aero">
  <div class="container-fluid px-3 px-lg-4">
    <a class="navbar-brand" href="#">
      <img src="public/images/logo.png" class="logo-frutiger" alt="DevShare">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto align-items-lg-center justify-content-center mb-2 mb-lg-0 gap-lg-3">
        <li class="nav-item">
          <a class="nav-link active-info" aria-current="page" href="#"><i class="bi bi-house me-2" aria-hidden="true"></i>Início</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-people-fill me-2"></i>Comunidade</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-compass me-2"></i>Explorar</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-info-circle me-2"></i>Sobre</a>
        </li>
        
         
      </ul>
      <form class="d-flex flex-grow-1 flex-lg-grow-0 search-form text-light mx-lg-3 my-3 my-lg-0" role="search">
        <input class="form-control" type="search" placeholder="Buscar..." aria-label="Buscar"/>
      </form>

      <div class="btn-sessao d-flex gap-2 ms-lg-3 mb-3 mb-lg-0">
        <button type="button" class="btn-not btn-lg px-2"><i class="icon-bell bi bi-bell-fill fs-4"></i></button>
        <button type="button" class="btn-log btn-lg px-2"><i class="icon-log bi bi-person-fill fs-4"></i></button>
      </div>
    </div>

    
  </div>
</nav>

    </header>

    <main>

      <section class="banner py-4 py-md-5">
        <div class="container-fluid px-3 px-md-4">
          <div class="row align-items-center">
            <div class="col-12 col-lg-8">
              <div class="d-none d-md-block">
                <img src="public/images/textos.png" class="txt-fruitger img-fluid" alt="Compartilhe seus projetos">
                <div class="exp d-flex flex-column flex-sm-row gap-3">
                  <button type="button" class="btn-pst">Poste seu projeto <i class="bi bi-arrow-right fm-4"></i></button>
                  <button type="button" class="btn-exp">Explore projetos</button>
                </div>
              </div>
              <div class="d-flex d-md-none flex-column align-items-center gap-4 text-center">
                <div class="mx-n3 w-100">
                  <img src="public/images/textos.png" class="img-fluid w-100" alt="Compartilhe seus projetos">
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
  
    </main>

    <footer>

      <div class="rodapé">
       
      </div>
      
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>