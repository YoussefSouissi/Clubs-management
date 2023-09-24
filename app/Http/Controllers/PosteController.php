<?php

namespace App\Http\Controllers;

use App\Models\club;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use Illuminate\Support\Facades\Storage;

class PosteController extends Controller
{
    public function CreatePoste(Request $request, $clubId)
    {
        $club = club::findOrFail($clubId);
        $validatedData = $request->validate([
            'image' => 'required|image',
            'description' => 'required|string'
        ]);

        $imagePath = $request->file('image')->store('poste_images', 'public');

        $post = new post([
            'image' => $imagePath,
            'description' => $validatedData['description']
        ]);
        $club->postes()->save($post);
        return response()->json([
            'message' => 'Post created successfully!',
            'data' => $post
        ]);
    }


    public function affichePoste()
    {
        $poste = post::all();
        return response()->json(
            [
                'poste' => $poste,
                'message' => 'ok',
                'code' => 200
            ]
        );
    }




}