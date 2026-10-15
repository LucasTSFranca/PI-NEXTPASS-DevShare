<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DevShare')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    

</head>
<body class='' style='background-image: url("../images/background.png");
                      background-size: cover;
                      background-attachment: fixed; 
                      background-repeat: no-repeat;
                      background-position: center;  '>
  <header>
    <nav class="navbar navbar-expand-lg navbar-aero">
      <div class="container-fluid px-3 px-lg-4">
        <a class="navbar-brand" href="{{ route('home')}}">
          <img src="{{ asset('images/logo.png') }}" class="logo-frutiger" alt="DevShare">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto align-items-lg-center justify-content-center mb-2 mb-lg-0 gap-lg-3">
            <li class="nav-item">
              <a class="nav-link active-info" aria-current="page" href="{{ route('home')}}"><i class="bi bi-house me-2" aria-hidden="true"></i>Início</a>
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
            @yield('btn-sessao')
          </div>
        </div> 
      </div>
    </nav>
  </header>
  <main>
  @yield('conteudo')
  </main>

  <footer class="site-footer">
    <div class="rodapé container-fluid px-4 px-lg-5 py-4">
      <div class="row align-items-center gy-4">
        <div class="col-12 col-lg-5 text-center text-lg-start">
          <a class="footer-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="" class="footer-logo">
            <span>DevShare</span>
          </a>
          <p class="footer-description mb-0">Um espaço para compartilhar projetos, trocar ideias e crescer em comunidade.</p>
        </div>

        <div class="col-12 col-lg-7">
          <div class="footer-contact text-center text-lg-end">
            <h2 class="footer-heading">Feito por quem compartilha</h2>
            <nav class="footer-links d-flex flex-wrap justify-content-center justify-content-lg-end gap-3" aria-label="Contatos da equipe">
              <a href="https://github.com/LucasTSFranca" target="_blank" rel="noopener noreferrer"><i class="bi bi-github" aria-hidden="true"></i> Lucas</a>
              <a href="https://github.com/" target="_blank" rel="noopener noreferrer"><i class="bi bi-github" aria-hidden="true"></i> Luiz</a>
              <a href="https://github.com/samucs788" target="_blank" rel="noopener noreferrer"><i class="bi bi-github" aria-hidden="true"></i> Samuel</a>
              <a href="https://github.com/NextPassPI" target="_blank" rel="noopener noreferrer"><i class="bi bi-github" aria-hidden="true"></i> NextPass</a>
            </nav>
          </div>
        </div>
      </div>

      <div class="footer-bottom d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 mt-4 pt-3">
        <span>&copy; {{ date('Y') }} DevShare. Todos os direitos reservados.</span>
        <a href="{{ route('home') }}">Compartilhe seu próximo projeto <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>