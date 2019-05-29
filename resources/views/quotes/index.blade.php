@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h1>Agenda tu cita</h1>
                </div>
                <div class="card-body">
                    <div class=" mt-5 text-center">
                        {!!Form::open(['url' => '/doctores']) !!}

                        {!! Form::select('hora', $hora, null, ['id' => 'hora']) !!}

                        {!! Form::select('doctor', ['placeholder' => 'Selecciona'], null, ['id' => 'doctor']) !!}

                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary btn-sm">Agendar</button>

                        </div>
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
