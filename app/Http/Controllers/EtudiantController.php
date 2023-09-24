<?php

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\User;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function showEtudiant($id)
    {
        $user = User::find($id);
        return response()->json([
            $user,
            'message' => 'ok',
            'code' => 200
        ]);
    }

    public function updateEtudiant(int $id, Request $request)
    {
        $user = User::find($id);
        if (!$user) {

            return response()->json(['message' => 'User not found.'], 404);
        }
        $user->name = $request->name;
        $user->dateDeNaissance = $request->input('dateDeNaissance');
        $user->email = $request->input('email');
        $user->password = $request->password != '' ? bcrypt($request->input('password')) : $user->password;
        $user->save();
        return response()->json([
            'message' => 'etudiant updated successfully',
            'code' => 200
        ]);
    }


}