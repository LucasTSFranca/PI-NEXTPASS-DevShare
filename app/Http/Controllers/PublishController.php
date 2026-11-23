<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Str;

class PublishController extends Controller
{
    public function publish(request $request){

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
            'category' => ['required', 'integer', 'exists:categories,id'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,webp', 'max:5120'],
        ]);

        $imageDirectory = public_path('images/publications');

        if (!is_dir($imageDirectory) && !mkdir($imageDirectory, 0755, true) && !is_dir($imageDirectory)) {
            throw new \RuntimeException(
                'Não foi possível criar a pasta das imagens das publicações.'
            );
        }

        $imageFileName = Str::uuid() . '.' . $request->file('image')->extension();
        $imageSaved = $request->file('image')->move($imageDirectory, $imageFileName);

        if (!$imageSaved) {
            throw new \RuntimeException(
                'Não foi possível salvar a imagem da publicação.'
            );
        }

        $imagePath = 'images/publications/' . $imageFileName;

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
