<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Http\Requests\VisitaRequest;

/**
 * Class VisitaController
 * @package App\Http\Controllers
 */
class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitas = Visita::paginate();

        return view('visita.index', compact('visitas'))
            ->with('i', (request()->input('page', 1) - 1) * $visitas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visita = new Visita();
        return view('visita.create', compact('visita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisitaRequest $request)
    {
        Visita::create($request->validated());

        return redirect()->route('visitas.index')
            ->with('success', 'Visita created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $visita = Visita::find($id);

        return view('visita.show', compact('visita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visita = Visita::find($id);

        return view('visita.edit', compact('visita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisitaRequest $request, Visita $visita)
    {
        $visita->update($request->validated());

        return redirect()->route('visitas.index')
            ->with('success', 'Visita updated successfully');
    }

    public function destroy($id)
    {
        Visita::find($id)->delete();

        return redirect()->route('visitas.index')
            ->with('success', 'Visita deleted successfully');
    }
}
