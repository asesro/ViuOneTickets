@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Pantallas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('pantallas.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('pantallas.table')
        
@endsection