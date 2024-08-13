<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJurnalRequest;
use App\Http\Requests\UpdateJurnalRequest;
use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurnals = Jurnal::all();
        return view('jurnals.index', compact('jurnals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurnals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJurnalRequest $request)
    {
        Jurnal::create($request->validated());

        return redirect()->route('jurnals.index')->with('success', 'Jurnal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurnal $jurnal)
    {
        return view('jurnals.show', compact('jurnal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurnal $jurnal)
    {
        return view('jurnals.edit', compact('jurnal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurnalRequest $request, Jurnal $jurnal)
    {
        $jurnal->update($request->validated());

        return redirect()->route('jurnals.index')->with('success', 'Jurnal updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurnal $jurnal)
    {
        $jurnal->delete();

        return redirect()->route('jurnals.index')->with('success', 'Jurnal deleted successfully.');
    }
}
