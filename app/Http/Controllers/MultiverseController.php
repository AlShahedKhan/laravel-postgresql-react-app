<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Multiverse;
use Illuminate\Http\Request;

class MultiverseController extends Controller
{

    public function index()
    {
        // Fetch all multiverses from the database
        $multiverses = Multiverse::all();

        // Return the list of multiverses to the view via Inertia
        return Inertia::render('multiverse/index', [
            'multiverses' => $multiverses,
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $multiverse = new \App\Models\Multiverse();
        $multiverse->name = $request->input('name');
        $multiverse->description = $request->input('description');
        $multiverse->save();

        return Inertia::render('multiverse/create', [
            'multiverse' => $multiverse,
        ]);
    }
}
