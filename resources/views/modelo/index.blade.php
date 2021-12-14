@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
      Crear nuevos modelos de vehiculos
    </div>
    <a href="{{route('create1')}}" class="btn btn-primary btn-sm-3 ">Crear</a>
  </div>
{{--}}
  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class=" card-header card-body d-flex justify-content-between align-items-center">
                Gestión de Portafolios
                <a href="{{route('create')}}" class="btn btn-primary btn-sm">Crear</a>
               
            </div>
        </div>
    </div>
</div>{{--}}
<div class="row flex">
  @forelse ($modelos as $modelo)
  <div class="card col-md-5" style="width:18rem; margin-left-10px">
  <h5 class="card-title">Lenguaje: {{ $modelo->nombre }}</h5>
  <p class="card-text">Experiencia: {{ $modelo->imagen }}</p>
  </div>
  <hr>
  @empty
  <p>No Existen proyectos</p>
  @endforelse
</div>

    
@endsection


