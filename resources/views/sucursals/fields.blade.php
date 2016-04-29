<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Codigo', 'Codigo:') !!}
    {!! Form::text('Codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nombre', 'Nombre:') !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Contacto', 'Contacto:') !!}
    {!! Form::text('Contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telefono', 'Telefono:') !!}
    {!! Form::text('Telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hora_ini', 'Hora de apertura:') !!}
    {!! Form::time('Hora_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hora_fin', 'Hora de Cierre:') !!}
    {!! Form::time('Hora_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Cant Pantallas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Cant_pantallas', 'Cant Pantallas:') !!}
    {!! Form::number('Cant_pantallas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sucursals.index') !!}" class="btn btn-default">Cancel</a>
</div>
