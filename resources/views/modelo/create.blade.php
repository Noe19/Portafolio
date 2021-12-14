@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class=" card-header card-body d-flex justify-content-between align-items-center">
                    Creación de un Portafolio
                    <hr>
                    <a href="{{ route('modelo') }}" class="btn btn-danger btn-sm">Regresar a modelos</a>
                    <hr>
                    {{-- importante poner un form pues asi se enviara los datos de forma segura --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('store1') }}" method="POST">

                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Lenguaje de programacion</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1"
                                placeholder="Ingrese información" name="nombre">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Escribe tu experiencia con ese lenguaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                placeholder="Ingrese información" name="imagen"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>



@endsection
