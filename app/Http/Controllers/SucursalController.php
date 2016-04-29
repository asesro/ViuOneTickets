<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSucursalRequest;
use App\Http\Requests\UpdateSucursalRequest;
use App\Models\Sucursal;
use App\Repositories\SucursalRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
//use Yajra\Datatables\Engines\EloquentEngine;
//use Yajra\Datatables\Facades\Datatables;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Engines\EloquentEngine;

class SucursalController extends AppBaseController
{
    /** @var  SucursalRepository */
    private $sucursalRepository;

    public function __construct(SucursalRepository $sucursalRepo)
    {
        $this->sucursalRepository = $sucursalRepo;
    }

    /**
     * Display a listing of the Sucursal.
     *
     * @param Request $request
     * @return Response
     */

    public function data(Datatables $datatables){

        $collection = Sucursal::all();

        $collection = $datatables->of($collection);

        $this->renderSucursalesTable($collection);

        return $collection->make(true);

    }

    public function renderSucursalesTable( $collection){


        $collection->editColumn('Codigo', function ($ticket) {
            return (string) link_to_route(
                'sucursals.show',
                $ticket->Codigo,
                $ticket->id
            );
        });

        return $collection;

    }

    public function index(Request $request)
    {
        $this->sucursalRepository->pushCriteria(new RequestCriteria($request));
        $sucursals = $this->sucursalRepository->all();

        return view('sucursals.index')
            ->with('sucursals', $sucursals);
    }

    /**
     * Show the form for creating a new Sucursal.
     *
     * @return Response
     */
    public function create()
    {
        return view('sucursals.create');
    }

    /**
     * Store a newly created Sucursal in storage.
     *
     * @param CreateSucursalRequest $request
     *
     * @return Response
     */
    public function store(CreateSucursalRequest $request)
    {
        $input = $request->all();

        $sucursal = $this->sucursalRepository->create($input);

        Flash::success('Sucursal saved successfully.');

        return redirect(route('sucursals.index'));
    }

    /**
     * Display the specified Sucursal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sucursal = $this->sucursalRepository->findWithoutFail($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        return view('sucursals.show')->with('sucursal', $sucursal);
    }

    /**
     * Show the form for editing the specified Sucursal.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sucursal = $this->sucursalRepository->findWithoutFail($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        return view('sucursals.edit')->with('sucursal', $sucursal);
    }

    /**
     * Update the specified Sucursal in storage.
     *
     * @param  int              $id
     * @param UpdateSucursalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSucursalRequest $request)
    {
        $sucursal = $this->sucursalRepository->findWithoutFail($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        $sucursal = $this->sucursalRepository->update($request->all(), $id);

        Flash::success('Sucursal updated successfully.');

        return redirect(route('sucursals.index'));
    }

    /**
     * Remove the specified Sucursal from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sucursal = $this->sucursalRepository->findWithoutFail($id);

        if (empty($sucursal)) {
            Flash::error('Sucursal not found');

            return redirect(route('sucursals.index'));
        }

        $this->sucursalRepository->delete($id);

        Flash::success('Sucursal deleted successfully.');

        return redirect(route('sucursals.index'));
    }
}
