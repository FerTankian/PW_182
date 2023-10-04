<div class="row">
  <div class="col-4">
    <div id="list-example" class="list-group">
      <a class="list-group-item list-group-item-action" href="#list-item-1">inicio</a>
      <a class="list-group-item list-group-item-action" href="{{ route('apodopagina1')}}">Pagina1</a>
      <a class="list-group-item list-group-item-action" href="{{ route('apodopagina2')}}">pagina2</a>
      <a class="list-group-item list-group-item-action" href="{{ route('apodopagina3')}}">pagina3</a>
   

  </div>
  <div class="col-8">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      <h4 id="list-item-1">Pagina 1</h4>
      <p>
          <a class="nav-link" href="{{ route('apodopagina1')}}">Pagina1</a>
        </p>
      <h4 id="list-item-2">Pagina 2</h4>
      <p>
          <a class="nav-link" href="{{ route('apodopagina2')}}">Pagina2</a>
        </p>
      <h4 id="list-item-3">pagina3</h4>
      <p><a class="nav-link" href="{{ route('apodopagina3')}}">Pagina3</a>
    </p>
      
    </div>
  </div>
</div>