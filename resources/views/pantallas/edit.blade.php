@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Pantalla</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($pantalla, ['route' => ['pantallas.update', $pantalla->id], 'method' => 'patch']) !!}

            @include('pantallas.fields')

            {!! Form::close() !!}
        </div>
@endsection