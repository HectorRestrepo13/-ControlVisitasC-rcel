<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use App\Http\Requests\VisitanteRequest;

/**
 * Class VisitanteController
 * @package App\Http\Controllers
 */
class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitantes = Visitante::paginate();

        return view('visitante.index', compact('visitantes'))
            ->with('i', (request()->input('page', 1) - 1) * $visitantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visitante = new Visitante();
        return view('visitante.create', compact('visitante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisitanteRequest $request)
    {
        Visitante::create($request->validated());

        return redirect()->route('visitantes.index')
            ->with('success', 'Visitante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $visitante = Visitante::find($id);

        return view('visitante.show', compact('visitante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visitante = Visitante::find($id);

        return view('visitante.edit', compact('visitante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisitanteRequest $request, Visitante $visitante)
    {
        $visitante->update($request->validated());

        return redirect()->route('visitantes.index')
            ->with('success', 'Visitante updated successfully');
    }

    public function destroy($id)
    {
        Visitante::find($id)->delete();

        return redirect()->route('visitantes.index')
            ->with('success', 'Visitante deleted successfully');
    }
}
