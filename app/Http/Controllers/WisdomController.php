<?php

namespace App\Http\Controllers;

use App\Services\WisdomGenerator;
use Illuminate\Http\Request;

class WisdomController extends Controller
{
    public function index(Request $request)
    {
        $motivationalText = WisdomGenerator::generate();

        return view('index')->with('wisdom', $motivationalText ?? null);
    }
    
}
