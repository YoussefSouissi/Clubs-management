<?php

namespace App\Http\Controllers;

use App\Models\club;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function createClub(Request $request)
    {
        $request->validate([
            'club_name' => 'required',
            'club_image' => 'required|image',
            'chef_name' => 'required',
            'chef_email' => 'required|email',
            'chef_password' => 'required|string|min:8',
        ]);

        $imagePath = $request->file('club_image')->store('club_images', 'public');

        $chef = User::create([
            'name' => $request->input('chef_name'),
            'email' => $request->input('chef_email'),
            'password' => bcrypt($request->input('chef_password')),
            'role' => 'chef',
        ]);

        if ($chef) {
            $club = club::create([
                'nom' => $request->input('club_name'),
                'image' => $imagePath,
                'chef_id' => $chef->id,
            ]);
            $chef->club_id = $club->id;
            $chef->save();
            return redirect()->back()->with('Club created successfully!');
        } else {
            Storage::disk('public')->delete($imagePath);
            return redirect()->back()->with('Failed to create chef ');
        }
    }

    public function showClub($clubId)
    {

        $club = Club::find($clubId);

        if ($club) {
            $chef = User::find($club->chef_id);

            if ($chef) {
                $clubsData = [];


                $clubId = $club->getAttribute('id');
                $clubName = $club->getAttribute('nom');
                $clubImage = $club->getAttribute('image');
                $chefName = $club->chef()->first()->name;
                $chefEmail = $club->chef()->first()->email;

                $clubsData[] = [
                    'clubId' => $clubId,
                    // Include the club ID in the response
                    'clubName' => $clubName,
                    'clubImage' => $clubImage,
                    'chefName' => $chefName,
                    'chefEmail' => $chefEmail
                ];


                return response()->json([
                    'data' => $clubsData,
                    'message' => 'ok',
                    'code' => 200
                ]);
            } else {
                return response()->json([
                    'message' => 'Club not found.',
                    'code' => 404
                ], 404);
            }
        }

    }


    public function index()
    {
        $clubs = club::all();
        return view('HomePage',compact('clubs')); // bch yemchi l index l mawjoud fi doussi posts
    }

    public function ShowAllClubs()
    {
        $clubs = club::with('chef')->get();

        if ($clubs->isEmpty()) {
            return response()->json([
                'message' => 'No clubs found.',
                'code' => 404
            ], 404);
        }

        $clubsData = [];

        foreach ($clubs as $club) {
            $clubId = $club->getAttribute('id'); // Retrieve the club ID
            $clubName = $club->getAttribute('nom');
            $clubImage = $club->getAttribute('image');
            $chefName = $club->chef()->first()->name;
            $chefEmail = $club->chef()->first()->email;

            $clubsData[] = [
                'clubId' => $clubId,
                'clubName' => $clubName,
                'clubImage' => $clubImage,
                'chefName' => $chefName,
                'chefEmail' => $chefEmail
            ];
        }

        return response()->json([
            'clubs' => $clubsData,
            'message' => 'ok',
            'code' => 200
        ]);
    }

    public function countUsers()
    {
        $count = User::where('role', 'membre', 'etudiant')->count();

        return response()->json(['count' => $count]);
    }
    public function countClubs()
    {
        $count = club::all()->count();

        return response()->json(['count' => $count]);
    }

    public function updateClub(Request $request, $clubId)
    {
        $request->validate([
            'club_name' => 'required|string',
            'club_image' => 'image',
            'chef_name' => 'required|string',
            'chef_email' => 'required|email',
            'chef_password' => 'required|string|min:8',
        ]);
        $club = club::findOrFail($clubId);
        $club->nom = $request->input('club_name');
        if ($request->hasFile('club_image')) {
            Storage::disk('public')->delete($club->image);
            $imagePath = $request->file('club_image')->store('club_images', 'public');
            $club->image = $imagePath;
        }
        $chef = $club->chef;
        $chef->name = $request->input('chef_name');
        $chef->email = $request->input('chef_email');
        $chef->password = bcrypt($request->input('chef_password'));
        $chef->save();
        $club->save();
        return response()->json([
            'message' => 'Club updated successfully',
            'code' => 200
        ]);
    }
    function deleteClub($clubId)
    {
        $club = Club::findOrFail($clubId);

        $chef = $club->chef;

        $club->delete();

        if ($chef) {
            $chef->delete();
        }
        return response()->json([
            'message' => 'Club deleted successfully',
            'code' => 200
        ]);
    }
}