<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Torneo;
use Carbon\Carbon;

class TorneoController extends Controller
{
    public function index(): View
    {
        $torneos = Torneo::whereDate('fechaInicio', '>', now()->toDateString())->paginate(5);
        return view('dashboard', ['torneos' => $torneos]);
    }
}
