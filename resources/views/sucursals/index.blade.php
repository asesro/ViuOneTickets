@extends('layouts.app_')

@section('content')
        <div class="panel panel-default">

            <div class="panel-heading"><h2>Sucursales
                    <a class="btn btn-primary pull-right"  href="{!! route('sucursals.create') !!}">Nueva Sucursal</a></h2>
            </div>

            <div class="clearfix"></div>

            @include('flash::message')

            <div class="clearfix"></div>

            <div class="panel-body">

                @include('sucursals.table')

            </div>

        </div>
        
@endsection

@section('footer')
        <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <script src="//cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
        <script>
                $(document).ready(function() {
                        $('#sucursals-table').DataTable({
                                procesing:true,
                                serverSide:true,
                                ajax:"/sucursals/data",
                                language: {
                                        emptyTable: 'sin datos',
                                        "info":      "Mostrando _START_ a _END_ de _TOTAL_ sucursales",
                                        "lengthMenu":     "Mostrar _MENU_ sucursales",
                                        "loadingRecords": "Cargando...",
                                        "search":         "Buscar: ",
                                        "paginate": {
                                                "first":      "Primero",
                                                "last":       "Ultimo",
                                                "next":       "Siguiente",
                                                "previous":   "Anterior"
                                        },
                                },
                                "columns":[
                                        {data: 'Codigo'},
                                        {data: 'Nombre'},
                                        {data: 'Contacto'},
                                        {data: 'Telefono'},
                                        {data: 'Cant_pantallas'},


                                ]
                        }
                        );
                } );

        </script>
@endsection