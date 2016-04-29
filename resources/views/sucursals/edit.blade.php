@extends('layouts.app_')

@section('content')
    <div class="panel panel-default col-lg-2">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Sucursal</h1>
            </div>
        </div>

        @include('core-templates::common.errors')
    <div class="well">
        <div class="row">
            {!! Form::model($sucursal, ['route' => ['sucursals.update', $sucursal->id], 'method' => 'patch']) !!}

            @include('sucursals.fields')

            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection