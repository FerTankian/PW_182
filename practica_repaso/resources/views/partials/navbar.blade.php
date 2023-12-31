<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

<nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
  <div class="container">
    <img src="https://www.escolme.edu.co/wp-content/uploads/2017/05/e-libro-logo.png" height="70" alt=""
      loading="lazy" />
    <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon d-flex justify-content-start align-items-center">
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="/">Noticias</a>
          <!-- <a class="nav-link {{ request ()->routeIs('apodoPrincipal')?'text-danger':''}}" aria-current="page" href="/">noticias</a>
         -->
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/registrar_libro">Registrar libro</a>
        </li>
      </ul>

      <ul class="navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link px-2" href="#!">
            <i class="fab fa-facebook-square"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-2" href="#!">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2" href="#!">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>