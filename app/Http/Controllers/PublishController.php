<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublishController extends Controller
{
    public function publish(request $request){

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
            'category' => ['required', 'integer', 'exists:categories,id'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,webp', 'max:5120'],
        ]);

        $imagePath = $request->file('image')->store('publications', 'public');

        Publication::create([
            'user_id' => $request->user()->id,
            'category_id' => $validated['category'],
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'is_published' => true,
        ]);

        // Redireciona de volta para fazer o login
        return redirect()->route('home')->with('success', 'Publicação feita!');
    }
}
