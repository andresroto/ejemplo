@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-2">
            <h1 class="text-center mb-4 mt-5">Listado de personal</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                    <tr>
                        <th scope="row">{{ $doctor->id }}</th>
                        <td><a href="/doctores/{{$doctor->id}}">{{ $doctor->nombre_completo }}</a></td>
                        <td>
                            <a class="btn btn-outline-primary btn-sm" href="/doctores/{{$doctor->id}}/edit" role="button">Asignar
                                citas</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-sm-8 offset-2 mt-5">
            {{ $doctors->links() }}
        </div>
    </div>
</div>

@endsection
