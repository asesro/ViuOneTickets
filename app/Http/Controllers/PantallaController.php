<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePantallaRequest;
use App\Http\Requests\UpdatePantallaRequest;
use App\Repositories\PantallaRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PantallaController extends AppBaseController
{
    /** @var  PantallaRepository */
    private $pantallaRepository;

    public function __construct(PantallaRepository $pantallaRepo)
    {
        $this->pantallaRepository = $pantallaRepo;
    }

    /**
     * Display a listing of the Pantalla.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pantallaRepository->pushCriteria(new RequestCriteria($request));
        $pantallas = $this->pantallaRepository->all();

        return view('pantallas.index')
            ->with('pantallas', $pantallas);
    }

    /**
     * Show the form for creating a new Pantalla.
     *
     * @return Response
     */
    public function create()
    {
        return view('pantallas.create');
    }

    /**
     * Store a newly created Pantalla in storage.
     *
     * @param CreatePantallaRequest $request
     *
     * @return Response
     */
    public function store(CreatePantallaRequest $request)
    {
        $input = $request->all();

        $pantalla = $this->pantallaRepository->create($input);

        Flash::success('Pantalla saved successfully.');

        return redirect(route('pantallas.index'));
    }

    /**
     * Display the specified Pantalla.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pantalla = $this->pantallaRepository->findWithoutFail($id);

        if (empty($pantalla)) {
            Flash::error('Pantalla not found');

            return redirect(route('pantallas.index'));
        }

        return view('pantallas.show')->with('pantalla', $pantalla);
    }

    /**
     * Show the form for editing the specified Pantalla.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pantalla = $this->pantallaRepository->findWithoutFail($id);

        if (empty($pantalla)) {
            Flash::error('Pantalla not found');

            return redirect(route('pantallas.index'));
        }

        return view('pantallas.edit')->with('pantalla', $pantalla);
    }

    /**
     * Update the specified Pantalla in storage.
     *
     * @param  int              $id
     * @param UpdatePantallaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePantallaRequest $request)
    {
        $pantalla = $this->pantallaRepository->findWithoutFail($id);

        if (empty($pantalla)) {
            Flash::error('Pantalla not found');

            return redirect(route('pantallas.index'));
        }

        $pantalla = $this->pantallaRepository->update($request->all(), $id);

        Flash::success('Pantalla updated successfully.');

        return redirect(route('pantallas.index'));
    }

    /**
     * Remove the specified Pantalla from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pantalla = $this->pantallaRepository->findWithoutFail($id);

        if (empty($pantalla)) {
            Flash::error('Pantalla not found');

            return redirect(route('pantallas.index'));
        }

        $this->pantallaRepository->delete($id);

        Flash::success('Pantalla deleted successfully.');

        return redirect(route('pantallas.index'));
    }
}
