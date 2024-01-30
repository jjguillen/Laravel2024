<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Torneo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class TorneoController extends Controller
{
    public function index(): View
    {
        $torneos = Torneo::whereDate('fechaInicio', '>', now()->toDateString())->paginate(5);
        return view('dashboard', ['torneos' => $torneos]);
    }

    public function index_web(): View
    {
        $torneos = Torneo::whereDate('fechaInicio', '>', now()->toDateString())->orderByDesc('fechaInicio')->get();
        return view('web.torneos', ['torneos' => $torneos]);
    }

    public function create()
    {
        return view('torneos.create');
    }

    public function store(Request $request)
    {
        $torneo = new Torneo();
        $torneo->nombre = $request->nombre;
        $torneo->juego = $request->juego;
        $torneo->fechaInicio = $request->fechaInicio;
        $torneo->premio1 = $request->premio1;
        $torneo->premio2 = $request->premio2;
        $torneo->maxParticipantes = $request->maxParticipantes;
        $torneo->save();

        //SUBIR IMAGEN
        $id = $torneo->id;
        $request->file('imagen')->storeAs(
            'public',
            'torneo_' . $id . '.jpg'
        );

        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        $torneo = Torneo::find($id);
        return view('web.torneo_detalle', ['torneo' => $torneo]);
    }
}
