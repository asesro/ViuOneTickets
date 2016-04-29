<?php

namespace App\DataTables;

use App\Models\Sucursal;
use Form;
use Yajra\Datatables\Services\DataTable;

class SucursalDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('actions', function ($data) {
                            return '
                            ' . Form::open(['route' => ['sucursals.destroy', $data->id], 'method' => 'delete']) . '
                            <div class=\'btn-group\'>
                                <a href="' . route('sucursals.show', [$data->id]) . '" class=\'btn btn-default btn-xs\'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="' . route('sucursals.edit', [$data->id]) . '" class=\'btn btn-default btn-xs\'><i class="glyphicon glyphicon-edit"></i></a>
                                ' . Form::button('<i class="glyphicon glyphicon-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return confirm('Are you sure?')"
                            ]) . '
                            </div>
                            ' . Form::close() . '
                            ';
                        })
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $sucursals = Sucursal::query();

        return $this->applyScopes($sucursals);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns(array_merge(
                $this->getColumns(),
                [
                    'actions' => [
                        'orderable' => false,
                        'searchable' => true,
                        'printable' => true,
                        'exportable' => true
                    ]
                ]
            ));
//            ->parameters([
//                'dom' => 'Bfrtip',
//                'scrollX' => true,
//                'buttons' => [
//                    'csv',
//                    'excel',
//                    'pdf',
//                    'print',
//                    'reset',
//                    'reload'
//                ],
//            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'Codigo' => ['name' => 'Codigo', 'data' => 'Codigo'],
            'Nombre' => ['name' => 'Nombre', 'data' => 'Nombre'],
            'Contacto' => ['name' => 'Contacto', 'data' => 'Contacto'],
            'Telefono' => ['name' => 'Telefono', 'data' => 'Telefono'],
            'Cant_pantallas' => ['name' => 'Cant_pantallas', 'data' => 'Cant_pantallas'],
//            'Hora_ini' => ['name' => 'Hora_ini', 'data' => 'Hora_ini'],
//            'Hora_fin' => ['name' => 'Hora_fin', 'data' => 'Hora_fin'],
//            'id_foto' => ['name' => 'id_foto', 'data' => 'id_foto']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'sucursales';
    }
}
