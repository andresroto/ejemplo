@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h1>Agendar Cita</h1>
                    <h4>{{$doctor->nombre_completo}}</h4>
                </div>

                <div class="card-body">
                    @include('doctors.cita')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
