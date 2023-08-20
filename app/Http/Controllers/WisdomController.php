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

    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'text' => 'required|string|max:255',
        ]);

        // Create a new motivational textt
        // WisdomGenerator::insert($validatedData['text']);

        return redirect()->route('wisdom.index')->with('success', 'Motivational text created successfully!');
    }

    
}
