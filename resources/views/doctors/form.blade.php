{!!Form::open(['url' => '/doctores']) !!}
<div class="mb-3">
    {!! Form::label('nombre_completo', 'Nombre Completo') !!}
    {!! Form::text('nombre_completo', '' ,['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="mb-3">
    {!! Form::label('especialidad', 'Especialidad') !!}
    {!! Form::text('especialidad', '' ,['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="mb-3">
    {!! Form::label('direccion', 'Dirección') !!}
    {!! Form::text('direccion', '' ,['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="mb-3">
    {!! Form::label('telefono', 'Teléfono') !!}
    {!! Form::number('telefono', '' ,['class' => 'form-control',  'required' => 'required', 'placeholder' => 'máx 10 dígitos']) !!}
</div>

<div>
    {!! Form::label('email', 'Correo') !!}
    {!! Form::email('email', '' ,['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
    <button type="reset" class="btn btn-danger btn-sm">Borrar</button>
</div>
{!! Form::close()!!}
