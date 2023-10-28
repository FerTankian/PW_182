

@extends('layouts.plantilla')

@section('titulo','principal')

@section('contenido')
<br>
<br>
<br>
<br>
<br>
<h1 class="display-1 text-center" style="font-family: 'Times New Roman', serif; color: #FF0000;">Noticias relevantes</h1>

<!--Main Navigation-->
<header>
  <!-- Intro settings -->
  <style>
    #intro {
      /* Margin to fix overlapping fixed navbar */
      margin-top: 58px;
    }

    @media (max-width: 991px) {
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 45px;
      }
    }
  </style>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="my-5">
  <div class="container">

    <!--Section: Noticia del dia-->
    <section class="border-bottom pb-4 mb-5">
      <div class="row gx-5">
        <div class="col-md-6 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="https://www.cinemaldito.com/wp-content/uploads/2022/06/Fantasias-de-un-escritor-portada.png" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Noticia del dia</span>
          <h4><strong>Fantasías de un escritor (Arnaud Desplechin)</strong></h4>
          <p class="text-muted">
          En la reciente Los amores de Anaïs (Charline Bourgeois-Tacquet, 2021) encontrábamos 
          al veterano actor Denis Podalydès en el papel de un escritor maduro que mantenía una 
          aventura con la joven protagonista que encarna Anaïs Demoustier. La mirada sobre él desde 
          la perspectiva de la directora y de su personaje central le daba un tratamiento patético 
          y decadente, un cliché tan presente en la ficción y la realidad como necesario de evitar. 
          </p>
          <button type="button" class="btn btn-primary">Ver mas</button>
        </div>
      </div>
    </section>
    <section class="border-bottom pb-4 mb-5">
      <div class="row gx-5">
        <div class="col-md-6 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="https://www.elsoldelalaguna.com.mx/cultura/3may5m-feria-del-libro-nuevo-leon/ALTERNATES/LANDSCAPE_960/Feria-del-Libro-Nuevo-Le%C3%B3n" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Noticia del dia</span>
          <h4><strong>XXIII Feria Internacional del Libro</strong></h4>
          <p class="text-muted">
          Ven y sumérgete en la magia de las palabras, donde escritores, editores 
          y amantes de la lectura se reúnen para celebrar la diversidad cultural y 
          el poder transformador de los libros. Nuestra feria anual es un encuentro 
          imperdible para todos aquellos que buscan explorar nuevas historias, expandir 
          sus conocimientos y encontrar ese ejemplar especial que los acompañará para siempre.
          </p>
          <button type="button" class="btn btn-primary">Ver mas</button>
        </div>
      </div>
    </section>

@endsection