<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        return view('profile', [
            'user' => $request->user(),
        ]);
    }

    public function updateAvatar(Request $request)
    {
        $validated = $request->validate([
            'avatar_photo' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,gif,webp',
                'max:2048'
            ],
        ]);

        $user = $request->user();

        // Guarda o caminho da foto anterior
        $previousAvatar = $user->avatar_photo;

        $avatarDirectory = public_path('images/avatars');

        if (!is_dir($avatarDirectory) && !mkdir($avatarDirectory, 0755, true) && !is_dir($avatarDirectory)) {
            throw new \RuntimeException(
                'Não foi possível criar a pasta das fotos de perfil.'
            );
        }

        $avatarFileName = Str::uuid() . '.' . $validated['avatar_photo']->extension();
        $avatarPath = 'images/avatars/' . $avatarFileName;
        $avatarSaved = $validated['avatar_photo']->move($avatarDirectory, $avatarFileName);

        if (!$avatarSaved) {
            throw new \RuntimeException(
                'Não foi possível salvar a foto do perfil.'
            );
        }

        // Atualiza a foto no banco de dados
        $user->avatar_photo = $avatarPath;
        $user->save();

        // Exclui a foto anterior
        if (
            $previousAvatar &&
            str_starts_with($previousAvatar, 'avatars/')
        ) {
            Storage::disk('public')->delete($previousAvatar);
        }

        if (
            $previousAvatar &&
            str_starts_with($previousAvatar, 'images/avatars/')
        ) {
            $previousPath = public_path($previousAvatar);

            if (is_file($previousPath)) {
                unlink($previousPath);
            }
        }

        return redirect()
            ->route('profile')
            ->with('success', 'Foto do perfil atualizada com sucesso.');
    }
}
