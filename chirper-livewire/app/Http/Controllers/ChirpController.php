<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChirpController extends Controller
{
    
    public function index(): Response
    {
        return response('Hello, World!');
    }

    public function create(): View {
        return view('chirps', [
            //
        ]);
    }

}
