<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function show($fileType, $fileName)
    {
        switch ($fileType) {
            case "PELICULA-PORTADA":
                $pathImage = env('UPLOAD_PELICULAS_PORTADAS');
                break;
            default: $pathImage = "";
        }
        $path = $pathImage . $fileName;
        // error_log($path);
        if (Storage::exists($path)) {
            return response()->file(Storage::path($path));
        }
        return asset('images/imagen_no_disponible.png');
    }
}
