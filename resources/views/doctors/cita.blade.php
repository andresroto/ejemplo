{!!Form::open(['route' => [$doctor->url(), $doctor->id], 'method' => $doctor->method() ,'class' => 'app-form']) !!}
<div class="mt-3 text-center">
    {!! Form::label('cita', 'Por favor seleccione una hora: ') !!}
    {!! Form::select('cita', ['26/02/19 8:00 am' => '26/02/19 8:00 am', '26/02/19 8:30 am' => '26/02/19 8:30 am',
    '26/02/19 9:00' => '26/02/19 9:00 am', '26/02/19 9:30 am' => '26/02/19 9:30 am', '26/02/19 10:00 am' => '26/02/19
    10:00 am', '26/02/19 10:30 am' => '26/02/19 10:30 am', '26/02/19 11:00 am' => '26/02/19 11:00 am', '26/02/19 11:30
    am' => '26/02/19 11:30 am', '26/02/19 12:00' => '26/02/19 12:00', '26/02/19 2:00 pm' => '26/02/19 2:00 pm',
    '26/02/19 2:30 pm' => '26/02/19 2:30 pm', '26/02/19 3:00 pm' => '26/02/19 3:00 pm', '26/02/19 3:30 pm' => '26/02/19
    3:30 pm', '26/02/19 4:00 pm' => '26/02/19 4:00 pm']) !!}
</div>

<div class="mt-4 text-center">
    <button type="submit" class="btn btn-primary btn-sm">Agendar</button>
</div>
{!! Form::close()!!}
