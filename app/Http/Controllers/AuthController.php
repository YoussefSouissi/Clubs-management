<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function insertUser(Request $request)
    {
        $request->header('Access-Control-Allow-Origin', '*');
        $request->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $request->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $user = new User();
        $user->name = $request->name;
        $user->dateDeNaissance = $request->dateDeNaissance;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role ? $request->role : 'etudiant';
        // $user->role = "admin";
        $user->save();
        return response()->json([
            'message' => 'Your Account created successfully',
            'code' => 200
        ]);
    }


    public function LoginUser(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $response['IsEtudiant'] = false;
            $response['IsMembre'] = false;
            $response['IsChef'] = false;
            $response['IsAdmin'] = false;
            if ($user->role == "etudiant") {
                $response['IsEtudiant'] = true;
                $response['data'] = $user;
            } else if ($user->role == "membre") {
                $response['IsMembre'] = true;
                $membre = User::where("id", $user->id)->with("clubs")->get();
                $response['data'] = $membre;
            } else if ($user->role == "chef") {
                $response['IsChef'] = true;
                $chef = User::where("id", $user->id)->with("clubs")->get();
                $response['data'] = $chef;
            } else if ($user->role == "Admin") {
                $response['IsAdmin'] = true;
                $admin = User::where("id", $user->id);
                $response['data'] = $admin;
            }
            $response['token'] = $user->createToken("api_token")->plainTextToken;
            return response()->json(["data" => $response], 200);

        } else {
            return response()->json(["message" => "User Not Found"], 404);
        }
    }
}