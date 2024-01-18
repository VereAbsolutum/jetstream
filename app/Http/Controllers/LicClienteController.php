<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLicClienteRequest;
use App\Http\Requests\UpdateLicClienteRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\LicClienteRepository;
use Illuminate\Http\Request;
use Flash;

class LicClienteController extends AppBaseController
{
    /** @var LicClienteRepository $licClienteRepository*/
    private $licClienteRepository;

    public function __construct(LicClienteRepository $licClienteRepo)
    {
        $this->licClienteRepository = $licClienteRepo;
    }

    /**
     * Display a listing of the LicCliente.
     */
    public function index(Request $request)
    {
        $licClientes = $this->licClienteRepository->paginate(10);

        return view('lic_clientes.index')
            ->with('licClientes', $licClientes);
    }

    /**
     * Show the form for creating a new LicCliente.
     */
    public function create()
    {
        return view('lic_clientes.create');
    }

    /**
     * Store a newly created LicCliente in storage.
     */
    public function store(CreateLicClienteRequest $request)
    {
        $input = $request->all();

        $licCliente = $this->licClienteRepository->create($input);

        Flash::success('Lic Cliente saved successfully.');

        return redirect(route('licClientes.index'));
    }

    /**
     * Display the specified LicCliente.
     */
    public function show($id)
    {
        $licCliente = $this->licClienteRepository->find($id);

        if (empty($licCliente)) {
            Flash::error('Lic Cliente not found');

            return redirect(route('licClientes.index'));
        }

        return view('lic_clientes.show')->with('licCliente', $licCliente);
    }

    /**
     * Show the form for editing the specified LicCliente.
     */
    public function edit($id)
    {
        $licCliente = $this->licClienteRepository->find($id);

        if (empty($licCliente)) {
            Flash::error('Lic Cliente not found');

            return redirect(route('licClientes.index'));
        }

        return view('lic_clientes.edit')->with('licCliente', $licCliente);
    }

    /**
     * Update the specified LicCliente in storage.
     */
    public function update($id, UpdateLicClienteRequest $request)
    {
        $licCliente = $this->licClienteRepository->find($id);

        if (empty($licCliente)) {
            Flash::error('Lic Cliente not found');

            return redirect(route('licClientes.index'));
        }

        $licCliente = $this->licClienteRepository->update($request->all(), $id);

        Flash::success('Lic Cliente updated successfully.');

        return redirect(route('licClientes.index'));
    }

    /**
     * Remove the specified LicCliente from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $licCliente = $this->licClienteRepository->find($id);

        if (empty($licCliente)) {
            Flash::error('Lic Cliente not found');

            return redirect(route('licClientes.index'));
        }

        $this->licClienteRepository->delete($id);

        Flash::success('Lic Cliente deleted successfully.');

        return redirect(route('licClientes.index'));
    }
}
