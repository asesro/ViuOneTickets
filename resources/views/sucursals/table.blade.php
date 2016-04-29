<table class="table table-responsive" id="sucursals-table">
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Contacto</th>
        <th>Telefono</th>
        <th>Cant Pantallas</th>
        {{--<th colspan="3">Action</th>--}}
    </thead>
    {{--<tbody>--}}
    {{--@foreach($sucursals as $sucursal)--}}
        {{--<tr>--}}
            {{--<td>{!! $sucursal->Codigo !!}</td>--}}
            {{--<td>{!! $sucursal->Nombre !!}</td>--}}
            {{--<td>{!! $sucursal->Contacto !!}</td>--}}
            {{--<td>{!! $sucursal->Telefono !!}</td>--}}
            {{--<td>{!! $sucursal->Cant_pantallas !!}</td>--}}
            {{--<td>{!! $sucursal->Hora_ini !!}</td>--}}
            {{--<td>{!! $sucursal->Hora_fin !!}</td>--}}
            {{--<td>--}}
                {{--{!! Form::open(['route' => ['sucursals.destroy', $sucursal->id], 'method' => 'delete']) !!}--}}
                {{--<div class='btn-group'>--}}
                    {{--<a href="{!! route('sucursals.show', [$sucursal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    {{--<a href="{!! route('sucursals.edit', [$sucursal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
</table>