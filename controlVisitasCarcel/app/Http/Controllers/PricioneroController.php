<?php

namespace App\Http\Controllers;

use App\Models\Pricionero;
use App\Http\Requests\PricioneroRequest;

/**
 * Class PricioneroController
 * @package App\Http\Controllers
 */
class PricioneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricioneros = Pricionero::all();

        return view('pricionero.index', compact('pricioneros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pricionero = new Pricionero();
        return view('pricionero.create', compact('pricionero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PricioneroRequest $request)
    {
        Pricionero::create($request->validated());

        return redirect()->route('pricioneros.index')
            ->with('success', 'Pricionero created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pricionero = Pricionero::find($id);

        return view('pricionero.show', compact('pricionero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pricionero = Pricionero::find($id);

        return view('pricionero.edit', compact('pricionero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PricioneroRequest $request, Pricionero $pricionero)
    {
        $pricionero->update($request->validated());

        return redirect()->route('pricioneros.index')
            ->with('success', 'Pricionero updated successfully');
    }

    public function destroy($id)
    {
        Pricionero::find($id)->delete();

        return redirect()->route('pricioneros.index')
            ->with('success', 'Pricionero deleted successfully');
    }
}
