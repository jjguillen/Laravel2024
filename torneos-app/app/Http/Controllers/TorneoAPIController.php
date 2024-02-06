<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TorneoResource;
use App\Models\Torneo;

class TorneoAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TorneoResource::collection(Torneo::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $torneo = new Torneo();
        $torneo->nombre = $request->nombre;
        $torneo->juego_id = $request->juego_id;
        $torneo->fechaInicio = $request->fechaInicio;
        $torneo->premio1 = $request->premio1;
        $torneo->premio2 = $request->premio2;
        $torneo->maxParticipantes = $request->maxParticipantes;
        $torneo->save();

        return ['message' => 'Torneo creado', 'torneo' => $torneo];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new TorneoResource(Torneo::findorFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Torneo::findOrFail($id)) {
            Torneo::destroy($id);
            return ['message' => 'Torneo deleted'];
        }
    }
}
