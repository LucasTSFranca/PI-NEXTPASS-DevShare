<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevShare</title>
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
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/logo.png') }}" class="logo-frutiger" alt="DevShare">
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
  @yield('conteudo')
  </main>

  <footer>
    <div class="rodapé">
       
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>