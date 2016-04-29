<div class="panel panel-default">
    <div class="panel-body">
        <div class="content">
            <h2 class="header">{!! $sucursal->Nombre !!}
                <span class="pull-right">
                    {!! Form::open(['route' => ['sucursals.destroy', $sucursal->id], 'method' => 'delete']) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    <a href="{!! route('sucursals.edit', [$sucursal->id]) !!}" class="btn btn-default">Editar</a>
                    {!! Form::close() !!}


                </span>
            </h2>
            <div class="panel well well-sm">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p> <strong>Codigo: </strong> {!! $sucursal->Codigo !!}</p>
                            <p> <strong>Nombre: </strong> {!! $sucursal->Nombre !!}</p>
                            <p> <strong>Telefono: </strong> {!! $sucursal->Telefono !!}</p>

                        </div>
                        <div class="col-md-6">
                            <p> <strong>Contacto: </strong> {!! $sucursal->Contacto !!}</p>
                            <p> <strong>Hora de Apertura: </strong> {!! $sucursal->Hora_ini !!}</p>
                            <p> <strong>Hora de Cierre: </strong> {!! $sucursal->Hora_fin !!}</p>

                        </div>

                    </div>
                </div>
            </div>
            <button id="button_effect" class="ui-state-default ui-corner-all pull-right">Adicionar Pantalla</button>
            <div id="effect" >
            <h2 class="header"> Agregar Nueva Pantalla
            </h2>
            <div class="panel well well-sm">
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['route' => 'pantallas.store']) !!}

                        @include('pantallas.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>




{{--<!-- Id Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $sucursal->id !!}</p>--}}
{{--</div>--}}

{{--<!-- Codigo Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('Codigo', 'Codigo:') !!}--}}
    {{--<p>{!! $sucursal->Codigo !!}</p>--}}
{{--</div>--}}

{{--<!-- Nombre Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('Nombre', 'Nombre:') !!}--}}
    {{--<p>{!! $sucursal->Nombre !!}</p>--}}
{{--</div>--}}

{{--<!-- Contacto Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('Contacto', 'Contacto:') !!}--}}
    {{--<p>{!! $sucursal->Contacto !!}</p>--}}
{{--</div>--}}

{{--<!-- Telefono Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('Telefono', 'Telefono:') !!}--}}
    {{--<p>{!! $sucursal->Telefono !!}</p>--}}
{{--</div>--}}

{{--<!-- Cant Pantallas Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('Cant_pantallas', 'Cant Pantallas:') !!}--}}
    {{--<p>{!! $sucursal->Cant_pantallas !!}</p>--}}
{{--</div>--}}

{{--<!-- Hora Ini Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('Hora_ini', 'Hora Ini:') !!}--}}
    {{--<p>{!! $sucursal->Hora_ini !!}</p>--}}
{{--</div>--}}

{{--<!-- Hora Fin Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('Hora_fin', 'Hora Fin:') !!}--}}
    {{--<p>{!! $sucursal->Hora_fin !!}</p>--}}
{{--</div>--}}

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $sucursal->created_at !!}</p>--}}
{{--</div>--}}

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $sucursal->updated_at !!}</p>--}}
{{--</div>--}}

