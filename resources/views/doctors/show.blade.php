@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-2">

            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    <h2 class="text-center mb-2 mt-3">{{ $doctor->nombre_completo }}</h2>
                </button>
                <button type="button" class="list-group-item list-group-item-action"><b>Nombre Completo:</b> {{
                    $doctor->nombre_completo }} </button>
                <button type="button" class="list-group-item list-group-item-action"><b>Especialidad:</b> {{
                    $doctor->especialidad }}</button>
                <button type="button" class="list-group-item list-group-item-action"><b>Dirección:</b> {{
                    $doctor->direccion }}
                </button>
                <button type="button" class="list-group-item list-group-item-action"><b>Teléfono:</b> {{
                    $doctor->telefono }}
                </button>
                <button type="button" class="list-group-item list-group-item-action"><b>Email:</b> {{
                    $doctor->email }}
                </button>
            </div>
            <div class="jumbotron mt-5">
                <h3 class="display-6">Citas asignadas</h3>
                <hr class="my-4">
                <button type="button" class="list-group-item list-group-item-action">{{$doctor->cita }}
                    <a class="btn btn-outline-primary btn-sm" href="/doctores/{{$doctor->id}}/edit" role="button">Editar
                        cita</a>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
