
@extends('layouts.plantilla')

@section('titulo','formulario libro')

@section('contenido')
<br>
<br>
<br>

<h1 class="display-1 text-center" style="font-family: 'Times New Roman', serif; color: #FF0000;">Registrar libro</h1>

@section('titulo', 'Formulario')
    
@section('contenido')

    <h1 class="display-1 text-center text-danger ">Formulario</h1>


    <div class="container mt-5" style="margin: 100">
        @if (session()->has('confirmacion'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{session('confirmacion')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        
        @endif
        @if ($errors->any())

            @foreach($errors -> all() as $error)
        
                <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> {{ $error }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> -->

            @endforeach
        @endif
        <div class="card ">

            <form method="POST" action="/guardar_libro">
                @csrf <!-- token de seguridad-->


                <div class="card-header text-primary fs-5 fw-semibold text-center">
                    registra tu libro aqui
                </div>
                
                <div class="card-body">

                    <form>

                        <div class="mb-3">
                            <label  class="form-label">ISBN: </label>
                            <input type="text" name="txtISBN" class="form-control" value= "{{old('txtISBN')}}" >
                            <p class= "text-danger fdt-italic"> {{$errors->first('txtISBN')}} </p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Titulo: </label>
                            <input type="text" name="txtTitulo"class="form-control" value= "{{old('txtTitulo')}}">
                            <p class= "text-warning fdt-italic"> {{$errors->first('txtTitulo')}} </p>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Autor: </label>
                            <input type="text" name="txtAutor" class="form-control" value= "{{old('txtAutor')}}" >
                            <p class= "text-danger fdt-italic"> {{$errors->first('txtAutor')}} </p>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Paginas: </label>
                            <input type="text" name="txtPaginas" class="form-control" value= "{{old('txtPaginas')}}" >
                            <p class= "text-danger fdt-italic"> {{$errors->first('txtPaginas')}} </p>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Editorial: </label>
                            <input type="text" name="txtEditorial" class="form-control" value= "{{old('txtEditorial')}}" >
                            <p class= "text-danger fdt-italic"> {{$errors->first('txtEditorial')}} </p>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Email de Editorial: </label>
                            <input type="email" name="txtEmail" class="form-control" value= "{{old('txtEmail')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <p class= "text-danger fdt-italic"> {{$errors->first('txtEmail')}} </p>
                        </div>
                        
                </div>

                <div class="card-footer text-body-secondary">
                    <button type="submit" class="btn btn-primary">Registrar libro</button>

                    </form>
                </div>
            </form>

        </div><!--- div del card-->

    </div> <!--- div del container-->
    

@endsection
@endsection