<?php

namespace App\Http\Controllers;

use App\Models\club;
use Illuminate\Http\Request;
use App\Models\User;


class MembersController extends Controller
{
    public function addUserToClub(Request $request, $clubId)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        try {
            $club = Club::findOrFail($clubId);
            $user = User::where('email', $request->input('email'))->first();
            if (!$user) {
                throw new \Exception('User not found.');
            }
            if ($club->members()->where('user_id', $user->id)->exists()) {
                throw new \Exception('User is already a member of the club.');
            }
            $club->members()->attach($user);
            $user->update(['role' => 'membre']);
            return response()->json(['message' => 'User added to the club successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }



    public function deleteMember($clubId, $userId)
    {
        try {
            $club = Club::findOrFail($clubId);
            $user = User::findOrFail($userId);
            if (!$club->members()->where('user_id', $user->id)->exists()) {
                throw new \Exception('User is not a member of the club.');
            }
            $club->members()->detach($user);
            return response()->json(['message' => 'Member removed from the club successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    public function showMembers($clubId)
    {
        try {
            $club = Club::findOrFail($clubId);

            $members = $club->members()->get();

            return response()->json([
                'members' => $members
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function countMembers($clubId)
    {
        $club = club::findorfail($clubId);
        $count = $club->members()->count();

        return response()->json(['count' => $count]);
    }

}