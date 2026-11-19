<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return view('profile', [
            'user' => $request->user(),
        ]);
    }

    public function updateAvatar(Request $request)
    {
        $validated = $request->validate([
            'avatar_photo' => ['required', 'image', 'mimes:jpg,jpeg,png,gif,webp', 'max:2048'],
        ]);

        $user = $request->user();
        $previousAvatar = $user->avatar_photo;
        $avatarPath = $validated['avatar_photo']->store('avatars', 'public');

        if ($avatarPath === false) {
            throw new \RuntimeException('Não foi possível salvar a foto do perfil.');
        }

        $user->update([
            'avatar_photo' => $avatarPath,
        ]);

        if ($previousAvatar && str_starts_with($previousAvatar, 'avatars/')) {
            Storage::disk('public')->delete($previousAvatar);
        }

        return redirect()->route('profile')->with('success', 'Foto do perfil atualizada com sucesso.');
    }
}
