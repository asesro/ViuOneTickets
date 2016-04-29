@extends('layouts.app')

@section('content')
    @include('pantallas.show_fields')

    <div class="form-group">
           <a href="{!! route('pantallas.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
