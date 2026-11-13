<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublishController extends Controller
{
    public function publish(request $request){

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'text', 'max:255'],
            'image' => ['required', 'string', 'max:255']
        ]);

        $publish = Publication::create([
            'title' => $validated['title'],
            'username' => $validated['username'],
            'is_premium' => false,       // Padrão comum
        ]);

        // Redireciona de volta para fazer o login
        return redirect()->route('home')->with('success', 'Publicação feita!');
    }
}
