<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    // Méthode pour télécharger un fichier
    public function upload(Request $request)
{
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $path = $file->store('media', 'public');
        $url = Storage::url($path);

        return response()->json(['url' => $url], 201);
    }

    return response()->json(['error' => 'No file uploaded'], 400);
}

    // Méthode pour récupérer un fichier
    public function show($filename)
    {
        $path = storage_path('app/public/media/' . $filename);

        if (!file_exists($path)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        return response()->file($path);
    }
}
